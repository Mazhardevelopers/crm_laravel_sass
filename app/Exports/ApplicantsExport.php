<?php

namespace App\Exports;

use Horsefly\Applicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicantsExport implements FromCollection, WithHeadings
{
    protected $type;

    public function __construct(string $type = 'all')
    {
        $this->type = $type;
    }

    public function collection()
    {
        switch ($this->type) {
            case 'emails':
                return Applicant::select('id', 'applicant_name', 'applicant_email', 'applicant_email_secondary')->get();
            case 'noLatLong':
                return Applicant::select('id', 'applicant_name', 'applicant_postcode', 'lat', 'lng')->get();
            case 'all':
            default:
                return Applicant::select('id', 'applicant_name', 'applicant_email', 'applicant_email_secondary', 'applicant_phone', 'applicant_postcode', 'created_at')->get();
        }
    }

    public function headings(): array
    {
        switch ($this->type) {
            case 'emails':
                return ['ID', 'Applicant Name', 'Email (Primary)', 'Email (Secondary)'];
            case 'noLatLong':
                return ['ID', 'Applicant Name', 'Postcode', 'Latitude', 'Longitude'];
            case 'all':
            default:
                return ['ID', 'Name', 'Email (Primary)', 'Email (Secondary)', 'Postcode', 'Phone', 'Landline', 'Created At'];
        }
    }
}
