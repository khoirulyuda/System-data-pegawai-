<?php

namespace App\Exports;

use App\Models\Pibdetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class PibdetailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pibdetail::all();
    }
}
