<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Horsefly\Applicant;
use Horsefly\ModuleNote;

class ModuleNotesController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $input['module'] = filter_var($input['module'], FILTER_SANITIZE_STRING);
        $input['details'] = filter_var($input['details'], FILTER_SANITIZE_STRING);
        $request->replace($input);

        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'module' => "required|in:Office,Sale,Unit,Applicant",
            'module_key' => "required",
            'details' => "required|string",
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
                'message' => 'Please fix the errors in the form'
            ], 422);
        }


        $noteDetail = '';
        if (isset($request->request_from_applicants) && $request->input('module') == 'Applicant') {
            if ($request->has('hangup_call') && $request->input('hangup_call') == 'on') {
                $noteDetail .= '<strong>Date:</strong> ' . Carbon::now()->format('d-m-Y') . '<br>';
                $noteDetail .= '<strong>Call Hung up/Not Interested:</strong> ' . ($request->input('hangup_call') == 'on' ? 'Yes' : 'No') . '<br>';
                $noteDetail .= '<strong>Details:</strong> ' . nl2br(htmlspecialchars($request->input('details'))) . '<br>';
                $noteDetail .= '<strong>By:</strong> ' . $user->name . '<br>';

                $applicant_id = $request->input('module_key');
                Applicant::find($applicant_id)->update([
                    'is_temp_not_interested' => true,
                    'is_no_job' => false
                ]);
            } elseif ($request->has('no_job') && $request->input('no_job') == 'on') {
                $noteDetail .= '<strong>Date:</strong> ' . Carbon::now()->format('d-m-Y') . '<br>';
                $noteDetail .= '<strong>No Job:</strong> ' . ($request->input('no_job') ? 'Yes' : 'No') . '<br>';
                $noteDetail .= '<strong>Details:</strong> ' . nl2br(htmlspecialchars($request->input('details'))) . '<br>';
                $noteDetail .= '<strong>By:</strong> ' . $user->name . '<br>';

                $applicant_id = $request->input('module_key');

                Applicant::where('id', $applicant_id)
                    ->update([
                        'is_no_response' => false,
                        'is_temp_not_interested' => false,
                        'is_blocked' => false,
                        'is_circuit_busy' => false,
                        'is_no_job' => true,
                        'applicant_notes' => $noteDetail,
                        'updated_at' => Carbon::now()
                    ]);
            } else {
                $transportType = '';
                $shiftPattern = '';

                // Format transport_type and shift_pattern if needed
                if ($request->has('transport_type')) {
                    $transportType = implode(', ', $request->input('transport_type'));
                }
                if ($request->has('shift_pattern')) {
                    $shiftPattern = implode(', ', $request->input('shift_pattern'));
                }
                $noteDetail .= '<strong>Date:</strong> ' . Carbon::now()->format('d-m-Y') . '<br>';
                $noteDetail .= '<strong>Current Employer Name:</strong> ' . htmlspecialchars($request->input('current_employer_name')) . '<br>';
                $noteDetail .= '<strong>PostCode:</strong> ' . htmlspecialchars($request->input('postcode')) . '<br>';
                $noteDetail .= '<strong>Current/Expected Salary:</strong> ' . htmlspecialchars($request->input('expected_salary')) . '<br>';
                $noteDetail .= '<strong>Qualification:</strong> ' . htmlspecialchars($request->input('qualification')) . '<br>';
                $noteDetail .= '<strong>Transport Type:</strong> ' . htmlspecialchars($transportType) . '<br>';
                $noteDetail .= '<strong>Shift Pattern:</strong> ' . htmlspecialchars($shiftPattern) . '<br>';
                $noteDetail .= '<strong>Nursing Home:</strong> ' . ($request->has('nursing_home') && $request->input('nursing_home') == 'on' ? 'Yes' : 'No') . '<br>';
                $noteDetail .= '<strong>Alternate Weekend:</strong> ' . ($request->has('alternate_weekend') && $request->input('alternate_weekend') == 'on' ? 'Yes' : 'No') . '<br>';
                $noteDetail .= '<strong>Interview Availability:</strong> ' . ($request->has('interview_availability') && $request->input('interview_availability') == 'on' ? 'Available' : 'Not Available') . '<br>';
                $noteDetail .= '<strong>No Job:</strong> ' . ($request->input('no_job') && $request->input('no_job') == 'on' ? 'Yes' : 'No') . '<br>';
                $noteDetail .= '<strong>Details:</strong> ' . nl2br(htmlspecialchars($request->input('details'))) . '<br>';
                $noteDetail .= '<strong>By:</strong> ' . $user->name . '<br>';
            }
        } else {
            $noteDetail .= $request->input('details') . ' --- By:' . $user->name . ' Date: ' . Carbon::now()->format('d-m-Y');
        }

        $html = '<div class="alert alert-danger border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <span class="font-weight-semibold">' . $request->input('module') . '</span> Note Could not Added
                </div>';

        //set Model name
        $model_class = 'Horsefly\\' . $request->input('module');

        //find the record into their relevant model/database table
        $model = $model_class::find($request->input('module_key'));
        if ($model) {
            ModuleNote::where('module_noteable_id', $request->input('module_key'))
                ->update(['status' => 0]);

            $module_note = ModuleNote::create([
                'user_id' => $user->id,
                'details' => $noteDetail,
                'module_noteable_type' => $model_class,
                'module_noteable_id' => $request->input('module_key'),
            ]);

            $last_inserted_module_note = $module_note->id;

            if ($last_inserted_module_note) {
                $module_note_uid = md5($last_inserted_module_note);

                ModuleNote::where('id', $last_inserted_module_note)
                    ->update(['module_note_uid' => $module_note_uid]);

                $html = '<div class="alert alert-success border-0 alert-dismissible" id="alert_note' . $model->id . '">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
							<span class="font-weight-semibold">' . $request->input('module') . '</span> Note Added Successfully
						</div>';

                echo $html;
            } else {
                echo $html;
            }
        } else {
            echo $html;
        }
    }

    public function getModuleNotesHistory(Request $request)
    {
        try {
            // Validate the incoming request to ensure 'id' is provided and is a valid integer
            $request->validate([
                'id' => 'required|integer|exists:module_notes,id',  // Assuming 'module_notes' is the table name and 'id' is the primary key
            ]);

            // Fetch the module notes by the given ID
            $moduleNote = ModuleNote::where('module_noteable_id', $request->id)->where('module_noteable_type', $request->module)->latest()->get();

            // Check if the module note was found
            if (!$moduleNote) {
                return response()->json(['error' => 'Module note not found'], 404);  // Return 404 if not found
            }

            // Return the specific fields you need (e.g., applicant name, notes, etc.)
            return response()->json([
                'data' => $moduleNote,
                'success' => true
            ]);
        } catch (\Exception $e) {
            // If an error occurs, catch it and return a meaningful error message
            return response()->json([
                'error' => 'An unexpected error occurred. Please try again later.',
                'message' => $e->getMessage(),
                'success' => false
            ], 500); // Internal server error
        }
    }
}
