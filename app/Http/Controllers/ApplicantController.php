<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Horsefly\Applicant;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the applicants.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applicants.list');
    }

    /**
     * Display the specified applicant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getApplicantsData(Request $request)
    {
        $auth_user = Auth::user();

        $applicants = Applicant::query();

        return DataTables::of($applicants)
            ->addColumn('notes', function ($applicant) {
                $latestNote = $applicant->notes()->latest()->first();
                return $latestNote ? $latestNote->details : 'No notes available';
            })
            ->addColumn('action', function ($applicant) use ($auth_user) {
                $actions = '<div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions</a>
                                <div class="dropdown-menu">';
                if ($auth_user->can('edit_applicant')) {
                    $actions .= '<a href="' . route('applicants.edit', $applicant->id) . '" class="dropdown-item">Edit</a>';
                }
                if ($auth_user->can('view_applicant')) {
                    $actions .= '<a href="' . route('applicants.show', $applicant->id) . '" class="dropdown-item">View</a>';
                }
                $actions .= '</div></div>';
                return $actions;
            })
            ->editColumn('created_at', function ($applicant) {
                return $applicant->created_at->format('d M Y, h:i A');
            })
            ->addColumn('download_cv', function ($applicant) {
                $filePath = $applicant->applicant_cv;
                $disabled = (!file_exists($filePath) || !$filePath) ? 'disabled' : '';
                $href = $disabled ? 'javascript:void(0);' : route('downloadApplicantCv', $applicant->id);
                return '<a href="' . $href . '" class="btn btn-sm btn-primary ' . $disabled . '">Download CV</a>';
            })
            ->rawColumns(['notes', 'action', 'download_cv'])
            ->make(true);
    }

}
