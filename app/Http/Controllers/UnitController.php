<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Horsefly\Applicant;
use Horsefly\ApplicantNote;
use Horsefly\ModuleNote;
use Horsefly\JobSource;
use Horsefly\JobCategory;
use Horsefly\JobTitle;
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

class UnitController extends Controller
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
        return view('applicants.list');
    }
    public function create()
    {
        $jobSources = JobSource::all();
        $jobCategories = JobCategory::all();
        $jobTitles = JobTitle::all();
        return view('applicants.create', compact('jobSources', 'jobCategories', 'jobTitles'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_category_id' => 'required|exists:job_categories,id',
            'job_type' => ['required', Rule::in(['specialist', 'non-specialist'])],
            'job_title_id' => 'required|exists:job_titles,id',
            'job_source_id' => 'required|exists:job_sources,id',
            'applicant_name' => 'required|string|max:255',
            'gender' => 'required',
            'applicant_email' => 'required|email|max:255|unique:applicants,applicant_email',
            'applicant_email_secondary' => 'nullable|email|max:255',
            'applicant_postcode' => ['required', 'string', 'max:8', 'regex:/^[A-Z0-9 ]+$/'],
            'applicant_phone' => 'required|string|max:20',
            'applicant_landline' => 'nullable|string|max:20',
            'applicant_experience' => 'nullable|string|max:255',
            'applicant_notes' => 'required|string|max:255',
            'applicant_cv' => 'nullable|mimes:docx,doc,csv,pdf|max:5000',
        ]);

        $validator->sometimes('have_nursing_home_experience', 'required|boolean', function ($input) {
            $nurseCategory = JobCategory::where('name', 'nurse')->first();
            return $nurseCategory && $input->job_category_id == $nurseCategory->id;
        });

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please fix the errors in the form'
            ], 422);
        }

        try {
            $applicantData = $request->only([
                'job_category_id',
                'job_type',
                'job_title_id',
                'job_source_id',
                'applicant_name',
                'applicant_email',
                'applicant_email_secondary',
                'applicant_postcode',
                'applicant_phone',
                'applicant_landline',
                'applicant_experience',
                'applicant_notes',
                'cv_path',
                'have_nursing_home_experience',
                'gender',
            ]);

            // Format data
            $applicantData['applicant_phone'] = preg_replace('/[^0-9]/', '', $applicantData['applicant_phone']);
            $applicantData['applicant_landline'] = $applicantData['applicant_landline']
                ? preg_replace('/[^0-9]/', '', $applicantData['applicant_landline'])
                : null;
            $applicantData['user_id'] = Auth::id();
            $path = null;

            if ($request->hasFile('applicant_cv')) {
                // Get the original filename
                $filenameWithExt = $request->file('applicant_cv')->getClientOriginalName();

                // Get just the filename without extension
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                // Get just the extension
                $extension = $request->file('applicant_cv')->getClientOriginalExtension();

                // Create new filename with timestamp
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;

                // Upload file to public/uploads directory
                $path = $request->file('applicant_cv')->storeAs('uploads', $fileNameToStore, 'public');

                // For direct move (alternative to storeAs)
                // $request->file('applicant_cv')->move(public_path('uploads'), $fileNameToStore);
                // $path = 'uploads/'.$fileNameToStore;
            }

            $applicantData['applicant_cv'] = $path;

            $applicant = Applicant::create($applicantData);

            if ($request->cv_path) {
                $applicant->update(['applicant_cv' => $request->cv_path]);
            }

            // Generate UID
            $applicant->update(['applicant_uid' => md5(uniqid($applicant->id, true))]);

            return response()->json([
                'success' => true,
                'message' => 'Applicant created successfully',
                'redirect' => route('applicants.list')
            ]);
        } catch (\Exception $e) {
            Log::error('Error creating applicant: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the applicant. Please try again.'
            ], 500);
        }
    }
    public function getApplicants(Request $request)
    {
        $statusFilter = $request->input('status_filter', ''); // Default is empty (no filter)

        $model = Applicant::query()->with(['jobTitle', 'jobCategory', 'jobSource'])->latest();

        // If there's a search query, apply it dynamically across all searchable columns
        // if ($search = $request->input('search.value')) {
        //     $model->where(function ($query) use ($search) {
        //         $query->where('applicants.applicant_name', 'like', "%$search%")
        //             ->orWhere('applicants.applicant_email', 'like', "%$search%")
        //             ->orWhere('applicants.applicant_phone', 'like', "%$search%")
        //             ->orWhere('applicants.applicant_landline', 'like', "%$search%")
        //             ->orWhere('applicants.applicant_postcode', 'like', "%$search%")
        //             ->orWhere('applicants.applicant_experience', 'like', "%$search%")
        //             // Instead of matching IDs directly, check by their names or any other field
        //             ->orWhereHas('jobTitle', function ($query) use ($search) {
        //                 $query->where('name', 'like', "%$search%");
        //             })
        //             ->orWhereHas('jobCategory', function ($query) use ($search) {
        //                 $query->where('name', 'like', "%$search%");
        //             })
        //             ->orWhereHas('jobSource', function ($query) use ($search) {
        //                 $query->where('name', 'like', "%$search%");
        //             })
        //             ->orWhere('applicants.status', 'like', "%$search%");
        //     });
        // }

        // Filter by status if it's not empty
        if ($statusFilter == 'active') {
            $model->where('status', 1);
        } elseif ($statusFilter == 'inactive') {
            $model->where('status', 0);
        } elseif ($statusFilter == 'blocked') {
            $model->where('is_blocked', true);
        }

        if ($request->ajax()) {
            return DataTables::eloquent($model)
                ->addIndexColumn() // This will automatically add a serial number to the rows
                ->addColumn('job_title', function ($applicant) {
                    return $applicant->jobTitle ? $applicant->jobTitle->name : '-';
                })
                ->addColumn('job_category', function ($applicant) {
                    return $applicant->jobCategory ? $applicant->jobCategory->name : '-';
                })
                ->addColumn('job_source', function ($applicant) {
                    return $applicant->jobSource ? $applicant->jobSource->name : '-';
                })
                ->addColumn('applicant_name', function ($applicant) {
                    return $applicant->formatted_applicant_name; // Using accessor
                })
                ->addColumn('applicant_postcode', function ($applicant) {
                    return $applicant->formatted_postcode; // Using accessor
                })
                ->addColumn('applicant_notes', function ($applicant) {
                    $notes = htmlspecialchars($applicant->applicant_notes, ENT_QUOTES, 'UTF-8');
                    $name = htmlspecialchars($applicant->applicant_name, ENT_QUOTES, 'UTF-8');
                    $postcode = htmlspecialchars($applicant->applicant_postcode, ENT_QUOTES, 'UTF-8');

                    // Tooltip content with additional data-bs-placement and title
                    return '<a href="#" title="View Note" onclick="showNotesModal(\'' . $notes . '\', \'' . $name . '\', \'' . $postcode . '\')">
                                <iconify-icon icon="solar:eye-scan-bold" class="text-primary fs-24"></iconify-icon>
                            </a>
                            <a href="#" title="Add Short Note" onclick="addShortNotesModal(\'' . $applicant->id . '\')">
                                <iconify-icon icon="solar:clipboard-add-linear" class="text-warning fs-24"></iconify-icon>
                            </a>';
                })
                ->addColumn('applicant_phone', function ($applicant) {
                    return $applicant->formatted_phone; // Using accessor
                })
                ->addColumn('applicant_landline', function ($applicant) {
                    return $applicant->formatted_landline; // Using accessor
                })
                ->addColumn('created_at', function ($applicant) {
                    return $applicant->formatted_created_at; // Using accessor
                })
                ->addColumn('updated_at', function ($applicant) {
                    return $applicant->formatted_updated_at; // Using accessor
                })
                ->addColumn('resume', function ($applicant) {
                    $applicant_cv = (file_exists('public/storage/uploads/' . $applicant->applicant_cv) || $applicant->applicant_cv != null)
                        ? '<a href="' . asset('storage/' . $applicant->applicant_cv) . '" title="Download CV" target="_blank">
                        <iconify-icon icon="solar:download-square-bold" class="text-success fs-28"></iconify-icon></a>'
                        : '<iconify-icon icon="solar:download-square-bold" class="text-light-grey fs-28"></iconify-icon>';

                    $updated_cv = (file_exists('public/storage/uploads/' . $applicant->updated_cv) || $applicant->updated_cv != null)
                        ? '<a href="' . asset('storage/' . $applicant->updated_cv) . '" title="Download Updated CV" target="_blank">
                        <iconify-icon icon="solar:download-square-bold" class="text-primary fs-28"></iconify-icon></a>'
                        : '<iconify-icon icon="solar:download-square-bold" class="text-grey fs-28"></iconify-icon>';

                    return $applicant_cv . ' ' . $updated_cv;
                })
                ->addColumn('status', function ($applicant) {
                    $status = '';
                    if ($applicant->is_blocked) {
                        $status = '<span class="badge bg-dark">Blocked</span>';
                    } elseif ($applicant->status) {
                        $status = '<span class="badge bg-success">Active</span>';
                    } elseif ($applicant->is_no_response) {
                        $status = '<span class="badge bg-danger">No Response</span>';
                    } elseif ($applicant->is_circuit_busy) {
                        $status = '<span class="badge bg-warning">Circuit Busy</span>';
                    } elseif ($applicant->is_no_job) {
                        $status = '<span class="badge bg-secondary">No Job</span>';
                    } else {
                        $status = '<span class="badge bg-secondary">Inactive</span>';
                    }

                    return $status;
                })
                ->addColumn('action', function ($applicant) {
                    return '<div class="btn-group dropstart">
                                <button type="button" class="border-0 bg-transparent p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <iconify-icon icon="solar:menu-dots-square-outline" class="align-middle fs-24 text-dark"></iconify-icon>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="' . route('applicants.edit', ['id' => $applicant->id]) . '">Edit</a></li>
                                    <li><a class="dropdown-item" href="' . route('applicants.details', ['id' => $applicant->id]) . '">View</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="addNoteModal(' . $applicant->id . ')">Add Note</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="goToNoJob(' . $applicant->id . ')">Go to No Job</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="goToNoJob(' . $applicant->id . ')">Upload Resume</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#" onclick="viewHistory(' . $applicant->id . ')">History</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="viewNotesHistory(' . $applicant->id . ')">Notes History</a></li>
                                </ul>
                            </div>';
                })

                ->rawColumns(['applicant_notes', 'applicant_landline', 'applicant_phone', 'job_title', 'resume', 'status', 'job_category', 'job_source', 'action'])
                ->make(true);
        }
    }
    public function getJobTitles(Request $request)
    {
        $jobTitles = JobTitle::where('job_category_id', $request->input('job_category_id'))
            ->where('type', $request->input('job_type'))->get();

        return response()->json($jobTitles);
    }
    public function storeShortNotes(Request $request)
    {
        $user = Auth::user();

        $applicant_id = $request->input('applicant_id');
        $details = $request->input('details');
        $notes_reason = $request->input('reason');
        $applicant_notes = $details . ' --- By: ' . $user->name . ' Date: ' . now()->format('d-m-Y');

        $updateData = ['applicant_notes' => $applicant_notes];

        switch ($notes_reason) {
            case 'blocked': // Block applicants
                Applicant::where('id', $applicant_id)
                    ->update(array_merge($updateData, [
                        'is_no_response' => false,
                        'is_blocked' => true
                    ]));
                break;

            case 'casual': // Casual notes
                Applicant::where('id', $applicant_id)
                    ->update(array_merge($updateData, [
                        'is_no_response' => false,
                        'is_blocked' => false,
                    ]));
                break;

            case 'no_response': // No response
                Applicant::where('id', $applicant_id)
                    ->update(array_merge($updateData, [
                        'is_circuit_busy' => false,
                        'is_no_response' => true,
                        'is_blocked' => false,
                    ]));
                break;

            case 'no_job': // No job applicants
                Applicant::where('id', $applicant_id)
                    ->update(array_merge($updateData, [
                        'is_no_response' => false,
                        'is_blocked' => false,
                        'is_no_job' => true,
                    ]));
                break;

            case 'circuit_busy': // Circuit busy
                Applicant::where('id', $applicant_id)
                    ->update(array_merge($updateData, [
                        'is_no_response' => false,
                        'is_circuit_busy' => true,
                        'is_blocked' => false,
                        'is_no_job' => false,
                    ]));
                break;
        }

        // Disable previous module note
        ModuleNote::where([
            'module_noteable_id' => $applicant_id,
            'module_noteable_type' => 'Horsefly\Applicant'
        ])
            ->orderBy('id', 'desc')
            ->update(['status' => 0]);

        // Create new module note
        $moduleNote = ModuleNote::create([
            'details' => $applicant_notes,
            'module_noteable_id' => $applicant_id,
            'module_noteable_type' => 'Horsefly\Applicant',
            'user_id' => $user->id,
            'status' => 1,
        ]);

        $moduleNote_uid = md5($moduleNote->id);
        $moduleNote->update(['module_note_uid' => $moduleNote_uid]);

        return redirect()->to(url()->previous());
    }
    public function downloadCv($id)
    {
        $applicant = Applicant::findOrFail($id);
        $filePath = $applicant->cv_path;

        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
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
