<?php

namespace App\Exports;

use App\Models\Pibcontainer;
use Maatwebsite\Excel\Concerns\FromCollection;

class PibcontainerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pibcontainer::all();
    }
}
