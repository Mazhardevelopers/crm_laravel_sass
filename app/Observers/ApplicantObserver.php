<?php

namespace App\Observers;

use Horsefly\Applicant;
use Horsefly\Audit;
use Illuminate\Support\Facades\Auth;

class ApplicantObserver
{
    /**
     * Handle the Applicant "created" event.
     */
    public function created(Applicant $applicant): void
    {
        Audit::create([
            "user_id" => Auth::id(),
            "data" => $applicant->toJson(),
            "auditable_type" => 'Horsefly\Applicant',
            "auditable_id" => $applicant->id,
            "message" => "Applicant {$applicant->applicant_name} has been created successfully at {$applicant->created_at}",
        ]);
    }

    /**
     * Handle the Applicant "updated" event.
     */
    public function updated(Applicant $applicant): void
    {
        // Check the dirty columns
        $columns = $applicant->getDirty();

        $applicant['changes_made'] = $columns;  // You may want to use a model method to store changes

        // Create the audit log entry
        Audit::create([
            "user_id" => Auth::id(),
            "data" => $applicant->toJson(),
            "auditable_type" => 'Horsefly\Applicant',
            "auditable_id" => $applicant->id,
            "message" => "Applicant {$applicant->applicant_name} has been updated successfully at {$applicant->updated_at}",
        ]);
    }


    /**
     * Handle the Applicant "deleted" event.
     */
    public function deleted(Applicant $applicant): void
    {
        //
    }

    /**
     * Handle the Applicant "restored" event.
     */
    public function restored(Applicant $applicant): void
    {
        //
    }

    /**
     * Handle the Applicant "force deleted" event.
     */
    public function forceDeleted(Applicant $applicant): void
    {
        //
    }

    public function csvAudit($audit_data)
    {
        $audit = new Audit();
        $audit->user_id = Auth::id();
        $audit->data = json_decode(json_encode($audit_data, JSON_FORCE_OBJECT));
        $audit->message = "Applicants CSV file imported successfully at {$audit_data['created_at']}";
        $audit->auditable_id = $audit_data['id'];
        $audit->auditable_type = "Horsefly\Applicant";
        $audit->save();
    }
}
