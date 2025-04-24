<?php

namespace App\Exports;

use Horsefly\Unit;
use Maatwebsite\Excel\Concerns\FromCollection;

class UnitsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Unit::all();
    }
}
