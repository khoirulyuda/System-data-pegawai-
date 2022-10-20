<?php

namespace App\Imports;

use App\Models\Pibcontainer;
use Maatwebsite\Excel\Concerns\ToModel;

class PibcontainerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pibcontainer([
            'Car' => $row[1],
            'ContNo' => $row[2],
            'ContUkur' => $row[3],
            
        ]);
    }
}
