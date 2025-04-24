<?php

namespace App\Exports;

use Horsefly\Applicant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ApplicantsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Applicant::all();
    }
}
