<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Horsefly\Office;
use Horsefly\Contact;
use Horsefly\ModuleNote;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class HeadOfficeController extends Controller
{
    public function __construct()
    {
        //
    }
    /**
     * Display a listing of the applicants.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('head-offices.list');
    }
    public function create()
    {
        return view('head-offices.create');
    }
    public function store(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'office_name' => 'required|string|max:255',
            'office_postcode' => ['required', 'string', 'max:8', 'regex:/^[A-Z0-9 ]+$/'],
            'office_notes' => 'required|string|max:255',

            // Contact person's details (Array validation)
            'contact_name' => 'required|array',
            'contact_name.*' => 'required|string|max:255',

            'contact_email' => 'required|array',
            'contact_email.*' => 'required|email|max:255',

            'contact_phone' => 'nullable|array',
            'contact_phone.*' => 'nullable|string|max:20',

            'contact_landline' => 'nullable|array',
            'contact_landline.*' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please fix the errors in the form'
            ], 422);
        }

        try {
            // Get office data
            $officeData = $request->only([
                'office_name',
                'office_postcode',
                'office_website',
                'office_notes',
            ]);

            // Format data for office
            $officeData['user_id'] = Auth::id();
            $office = Office::create($officeData);

            // Iterate through each contact provided in the request
            foreach ($request->input('contact_name') as $index => $contactName) {
                // Create contact data for each contact in the array
                $contactData = [
                    'contact_name' => $contactName,
                    'contact_email' => $request->input('contact_email')[$index],
                    'contact_phone' => preg_replace('/[^0-9]/', '', $request->input('contact_phone')[$index]),
                    'contact_landline' => $request->input('contact_landline')[$index]
                        ? preg_replace('/[^0-9]/', '', $request->input('contact_landline')[$index])
                        : null,

                    // No need to manually add `contactable_id` and `contactable_type`
                    // if the polymorphic relation is defined in the models.
                ];

                // Create each contact and associate it with the office
                $office->contact()->create($contactData);
            }

            // Generate UID
            $office->update(['office_uid' => md5(uniqid($office->id, true))]);

            return response()->json([
                'success' => true,
                'message' => 'Head Office created successfully',
                'redirect' => route('head-offices.list')
            ]);
        } catch (\Exception $e) {
            Log::error('Error creating head office: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the head office. Please try again.'
            ], 500);
        }
    }
    public function getHeadOffices(Request $request)
    {
        $statusFilter = $request->input('status_filter', ''); // Default is empty (no filter)

        $offices = Office::query()->latest();

        // Filter by status if it's not empty
        if ($statusFilter == 'active') {
            $offices->where('status', 1);
        } elseif ($statusFilter == 'inactive') {
            $offices->where('status', 0);
        }

        if ($request->ajax()) {
            return DataTables::eloquent($offices)
                ->addIndexColumn() // This will automatically add a serial number to the rows
                ->addColumn('office_name', function ($office) {
                    return $office->formatted_office_name; // Using accessor
                })
                ->addColumn('office_postcode', function ($office) {
                    return $office->formatted_postcode; // Using accessor
                })
                ->addColumn('website', function ($office) {
                    $website = $office->website;
                    return $website ? '<a href="' . e($website) . '" target="_blank">' . e($website) . '</a>' : '-';
                })
                ->addColumn('created_at', function ($office) {
                    return $office->formatted_created_at; // Using accessor
                })
                ->addColumn('updated_at', function ($office) {
                    return $office->formatted_updated_at; // Using accessor
                })
                ->addColumn('created_at', function ($office) {
                    return $office->formatted_created_at; // Using accessor
                })
                ->addColumn('updated_at', function ($office) {
                    return $office->formatted_updated_at; // Using accessor
                })
                ->addColumn('office_notes', function ($office) {
                    $notes = htmlspecialchars($office->office_notes, ENT_QUOTES, 'UTF-8');
                    $name = htmlspecialchars($office->office_name, ENT_QUOTES, 'UTF-8');
                    $postcode = htmlspecialchars($office->office_postcode, ENT_QUOTES, 'UTF-8');

                    // Tooltip content with additional data-bs-placement and title
                    return '<a href="#" title="View Note" onclick="showNotesModal(\'' . $notes . '\', \'' . $name . '\', \'' . $postcode . '\')">
                                <iconify-icon icon="solar:eye-scan-bold" class="text-primary fs-24"></iconify-icon>
                            </a>';
                })
                ->addColumn('status', function ($office) {
                    $status = '';
                    if ($office->status) {
                        $status = '<span class="badge bg-success">Active</span>';
                    } else {
                        $status = '<span class="badge bg-secondary">Inactive</span>';
                    }

                    return $status;
                })
                ->addColumn('action', function ($office) {
                    $postcode = $office->formatted_postcode;
                    $status = '';

                    if ($office->status) {
                        $status = '<span class="badge bg-success">Active</span>';
                    } else {
                        $status = '<span class="badge bg-secondary">Inactive</span>';
                    }
                    return '<div class="btn-group dropstart">
                                <button type="button" class="border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <iconify-icon icon="solar:menu-dots-square-outline" class="align-middle fs-24 text-dark"></iconify-icon>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="' . route('head-offices.edit', ['id' => $office->id]) . '">Edit</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="showDetailsModal(
                                    ' . $office->id . ',
                                    \'' . addslashes(htmlspecialchars($office->office_name)) . '\',
                                    \'' . addslashes(htmlspecialchars($postcode)) . '\',
                                    \'' . addslashes(htmlspecialchars($status)) . '\'
                                )">View</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="addShortNotesModal(' . $office->id . ')">Add Note</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#" onclick="viewNotesHistory(' . $office->id . ')">Notes History</a></li>
                                </ul>
                            </div>';
                })

                ->rawColumns(['office_notes', 'status', 'action', 'website'])
                ->make(true);
        }
    }
    public function storeHeadOfficeShortNotes(Request $request)
    {
        $user = Auth::user();

        $office_id = $request->input('office_id');
        $details = $request->input('details');
        $office_notes = $details . ' --- By: ' . $user->name . ' Date: ' . now()->format('d-m-Y');

        $updateData = ['office_notes' => $office_notes];

        Office::where('id', $office_id)->update($updateData);

        // Disable previous module note
        ModuleNote::where([
            'module_noteable_id' => $office_id,
            'module_noteable_type' => 'Horsefly\Office'
        ])
            ->orderBy('id', 'desc')
            ->update(['status' => 0]);

        // Create new module note
        $moduleNote = ModuleNote::create([
            'details' => $office_notes,
            'module_noteable_id' => $office_id,
            'module_noteable_type' => 'Horsefly\Office',
            'user_id' => $user->id,
            'status' => 1,
        ]);

        $moduleNote_uid = md5($moduleNote->id);
        $moduleNote->update(['module_note_uid' => $moduleNote_uid]);

        return redirect()->to(url()->previous());
    }
    public function officeDetails($id)
    {
        $applicant = Applicant::findOrFail($id);
        return view('applicants.details', compact('applicant'));
    }
    public function edit($id)
    {
        // Debug the incoming id
        Log::info('Trying to edit applicant with ID: ' . $id);

        $applicant = Applicant::find($id);

        // Check if the applicant is found
        if (!$applicant) {
            Log::info('Applicant not found with ID: ' . $id);
        }

        return view('applicants.edit', compact('applicant'));
    }
    public function update(Request $request)
    {
         // Validation
         $validator = Validator::make($request->all(), [
            'office_name' => 'required|string|max:255',
            'office_postcode' => ['required', 'string', 'max:8', 'regex:/^[A-Z0-9 ]+$/'],
            'office_notes' => 'required|string|max:255',

            // Contact person's details (Array validation)
            'contact_name' => 'required|array',
            'contact_name.*' => 'required|string|max:255',

            'contact_email' => 'required|array',
            'contact_email.*' => 'required|email|max:255',

            'contact_phone' => 'nullable|array',
            'contact_phone.*' => 'nullable|string|max:20',

            'contact_landline' => 'nullable|array',
            'contact_landline.*' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please fix the errors in the form'
            ], 422);
        }

        try {
            // Get office data
            $officeData = $request->only([
                'office_name',
                'office_postcode',
                'office_website',
                'office_notes',
            ]);

            // Get the office ID from the request
            $id = $request->input('office_id');

            // Retrieve the office record
            $office = Office::find($id);

             // If the applicant doesn't exist, throw an exception
             if (!$office) {
                throw new \Exception("Head Office not found with ID: " . $id);
            }

            // Update the applicant with the validated and formatted data
            $office->update($officeData);

            Contact::where('contactable_id',$office->id)
                ->where('contactable_type','Horsefly\Office')->delete();

            // Iterate through each contact provided in the request
            foreach ($request->input('contact_name') as $index => $contactName) {
                // Create contact data for each contact in the array
                $contactData = [
                    'contact_name' => $contactName,
                    'contact_email' => $request->input('contact_email')[$index],
                    'contact_phone' => preg_replace('/[^0-9]/', '', $request->input('contact_phone')[$index]),
                    'contact_landline' => $request->input('contact_landline')[$index]
                        ? preg_replace('/[^0-9]/', '', $request->input('contact_landline')[$index])
                        : null,

                    // No need to manually add `contactable_id` and `contactable_type`
                    // if the polymorphic relation is defined in the models.
                ];

                // Create each contact and associate it with the office
                $office->contact()->create($contactData);
            }

            return response()->json([
                'success' => true,
                'message' => 'Head Office updated successfully',
                'redirect' => route('head-offices.list')
            ]);
        } catch (\Exception $e) {
            Log::error('Error updating head office: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the head office. Please try again.'
            ], 500);
        }
    }
    public function destroy($id)
    {
        $applicant = Office::findOrFail($id);
        $applicant->delete();
        return redirect()->route('applicants.list')->with('success', 'Applicant deleted successfully');
    }
    public function show($id)
    {
        $applicant = Office::findOrFail($id);
        return view('applicants.show', compact('applicant'));
    }
}
