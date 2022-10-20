<?php

namespace App\Exports;

use App\Models\Pibheader;
use Maatwebsite\Excel\Concerns\FromCollection;

class PibheaderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pibheader::all();
    }
}
