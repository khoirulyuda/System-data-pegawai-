<?php

namespace App\Imports;

use App\Models\Pibdetail;
use Maatwebsite\Excel\Concerns\ToModel;

class PibdetailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pibdetail([
             'Car' => $row[0],
            'Serial' => $row[1],
            'NoHs' => $row[2],
            'SeriTr' => $row[3],
            'BrgUrai' => $row[4],
            'Merk' => $row[5],
            'Tipe' => $row[6],
            'SpfLain' => $row[7],
            'BrgAsal' => $row[8],
            'DNilInv' => $row[9],
            'DCif' => $row[10],
            'KdSat' => $row[11],
            'JmlSat' => $row[12],
            'KemasJn' => $row[13],
            'KemasJm' => $row[14],
            'SatBmJm' => $row[15],
            'SatCukJm' => $row[16],
            'NettoDtl' => $row[17],
            'KdFasDtl' => $row[18],
            'DtlOk' => $row[19],
            'FlBarangBaru' => $row[20],
            'FlLartas' => $row[21],
            'KatLartas' => $row[22],
            'SpekTarif' => $row[23],
            'DNilCuk' => $row[25],
            'JmPC' => $row[25],
            'SaldoAwalPc' => $row[26],
            
        ]);
    }
}
