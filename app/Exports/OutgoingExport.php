<?php

namespace App\Exports;

use App\Models\Outgoing;
use Maatwebsite\Excel\Concerns\FromCollection;

class OutgoingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outgoing::all();
    }
}
