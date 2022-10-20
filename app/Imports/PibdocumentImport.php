<?php

namespace App\Imports;

use App\Models\Pibdocument;
use Maatwebsite\Excel\Concerns\ToModel;

class PibdocumentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pibdocument([
            'Car' => $row[0],
            'Serial' => $row[1],
            'KdFasDtl' => $row[2],
            'NoUrut' => $row[3],
            'DokKd' => $row[4],
            'DokNo' => $row[5],
            'DokTg' => $row[6],
            'KdGroupDok' => $row[7],
            
        ]);
    }
}
