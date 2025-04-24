<?php

namespace App\Exports;

use Horsefly\HeadOffice;
use Maatwebsite\Excel\Concerns\FromCollection;

class HeadOfficesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return HeadOffice::all();
    }
}
