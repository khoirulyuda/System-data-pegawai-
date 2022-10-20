<?php

namespace App\Imports;

use App\Models\Production;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductionImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Production([
            'CustomerCode' => $row[1],
            'CustomerName' => $row[2],
            'SpecGroup' => $row[3],
            'Group' => $row[4],
            'CutLine' => $row[5],
            'CutDate' => $row[6],
            'MC' => $row[7],
            'MossiNo' => $row[8],
            'Rank' => $row[9],
            'EPAflag' => $row[10],
            'SpecCode' => $row[11],
            'SpecName' => $row[12],
            'Coating' => $row[13],
            'Thick' => $row[14],
            'Width' => $row[15],
            'Lenght1' => $row[16],
            'Lenght2' => $row[17],
            'MaterialWeight' => $row[18],
            'RewindWeight' => $row[19],
            'MaterialUsed' => $row[20],
            'SemiFweight' => $row[21],
            'RewindSemiFweight' => $row[22],
            'SemiFused' => $row[23],
            'ProductWeight' => $row[24],
            'RewindProductWeight' => $row[25],
            'ProductUsed' => $row[26],
            'TotalUsed' => $row[27],
            'Qty1' => $row[28],
            'Product' => $row[29],
            'Qty2' => $row[30],
            'SemiF' => $row[31],
            'TotalProdSemi' => $row[32],
            'Scrap' => $row[33],
            'Yields' => $row[34],
            'TonyuPcs' => $row[35],
            'Maker' => $row[36],
        ]);
    }
}
