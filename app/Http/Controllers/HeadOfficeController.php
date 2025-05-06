<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Horsefly\Office;
use Horsefly\Applicant;
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
        $validator = Validator::make($request->all(), [
            'office_name' => 'required|string|max:255',
            'office_postcode' => ['required', 'string', 'max:8', 'regex:/^[A-Z0-9 ]+$/'],
            'office_notes' => 'required|string|max:255',

            //contact persons details
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'contact_landline' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please fix the errors in the form'
            ], 422);
        }

        try {
            $headOfficeData = $request->only([
                'office_name',
                'office_postcode',
                'office_website',
                'office_notes',

                //contact persons details
                'contact_name',
                'contact_email',
                'contact_phone',
                'contact_landline',
            ]);

            // Format data
            $headOfficeData['contact_phone'] = preg_replace('/[^0-9]/', '', $headOfficeData['contact_phone']);
            $headOfficeData['contact_landline'] = $headOfficeData['contact_landline']
                ? preg_replace('/[^0-9]/', '', $headOfficeData['contact_landline'])
                : null;
            $headOfficeData['user_id'] = Auth::id();

            $HeadOffice = Office::create($headOfficeData);

            // Generate UID
            $HeadOffice->update(['office_uid' => md5(uniqid($HeadOffice->id, true))]);

            return response()->json([
                'success' => true,
                'message' => 'Head Office created successfully',
                'redirect' => route('head-offices.list')
            ]);
        } catch (\Exception $e) {
            Log::error('Error creating head office: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the applicant. Please try again.'
            ], 500);
        }
    }
    public function getHeadOffices(Request $request)
    {
        $statusFilter = $request->input('status_filter', ''); // Default is empty (no filter)

        $model = Office::query()->latest();

        // Filter by status if it's not empty
        if ($statusFilter == 'active') {
            $model->where('status', 1);
        } elseif ($statusFilter == 'inactive') {
            $model->where('status', 0);
        }

        if ($request->ajax()) {
            return DataTables::eloquent($model)
                ->addIndexColumn() // This will automatically add a serial number to the rows
                ->addColumn('office_name', function ($office) {
                    return $office->formatted_office_name; // Using accessor
                })
                ->addColumn('office_postcode', function ($office) {
                    return $office->formatted_postcode; // Using accessor
                })
                ->addColumn('office_notes', function ($office) {
                    $notes = htmlspecialchars($office->office_notes, ENT_QUOTES, 'UTF-8');
                    $name = htmlspecialchars($office->office_name, ENT_QUOTES, 'UTF-8');
                    $postcode = htmlspecialchars($office->office_postcode, ENT_QUOTES, 'UTF-8');

                    // Tooltip content with additional data-bs-placement and title
                    return '<a href="#" title="View Note" onclick="showHeadOfficeNotesModal(\'' . $notes . '\', \'' . $name . '\', \'' . $postcode . '\')">
                                <iconify-icon icon="solar:eye-scan-bold" class="text-primary fs-24"></iconify-icon>
                            </a>
                            <a href="#" title="Add Short Note" onclick="addHeadOfficeShortNotesModal(\'' . $office->id . '\')">
                                <iconify-icon icon="solar:clipboard-add-linear" class="text-warning fs-24"></iconify-icon>
                            </a>';
                })
                ->addColumn('created_at', function ($office) {
                    return $office->formatted_created_at; // Using accessor
                })
                ->addColumn('updated_at', function ($office) {
                    return $office->formatted_updated_at; // Using accessor
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
                    return '<div class="btn-group dropstart">
                                <button type="button" class="border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <iconify-icon icon="solar:menu-dots-square-outline" class="align-middle fs-24 text-dark"></iconify-icon>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="' . route('head-offices.edit', ['id' => $office->id]) . '">Edit</a></li>
                                    <li><a class="dropdown-item" href="' . route('head-offices.details', ['id' => $office->id]) . '">View</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="addNoteModal(' . $office->id . ')">Add Note</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="goToNoJob(' . $office->id . ')">Go to No Job</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#" onclick="viewHistory(' . $office->id . ')">History</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="viewNotesHistory(' . $office->id . ')">Notes History</a></li>
                                </ul>
                            </div>';
                })

                ->rawColumns(['office_notes', 'status', 'action'])
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
    public function applicantDetails($id)
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
        $id = $request->input('applicant_id');
        $applicant = Applicant::findOrFail($id);
        $applicant->update($request->all());

        return redirect()->route('applicants.list')->with('success', 'Applicant updated successfully');
    }
    public function destroy($id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->delete();
        return redirect()->route('applicants.list')->with('success', 'Applicant deleted successfully');
    }
    public function show($id)
    {
        $applicant = Applicant::findOrFail($id);
        return view('applicants.show', compact('applicant'));
    }
}
