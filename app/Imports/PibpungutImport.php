<?php

namespace App\Imports;

use App\Models\Pibpungut;
use Maatwebsite\Excel\Concerns\ToModel;

class PibpungutImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pibpungut([
            'Car' => $row[0],
            'KdBeban' => $row[1],
            'KdFasil' => $row[2],
            'NilBeban' => $row[3],
            
        ]);
    }
}
