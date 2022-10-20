<?php

namespace App\Imports;

use App\Models\Incoming;
use Maatwebsite\Excel\Concerns\ToModel;

class IncomingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Incoming([
            'OwnerCust' => $row[1],
            'Abbr' => $row[2],
            'MossiNo' => $row[3],
            'MC' => $row[4],
            'SpecGroup' => $row[5],
            'SpecCode' => $row[6],
            'SpecName' => $row[7],
            'Coating' => $row[8],
            'Thick' => $row[9],
            'Width' => $row[10],
            'Lenght1' => $row[11],
            'Lenght2' => $row[12],
            'EnterDate' => $row[13],
            'MatEnterDate' => $row[14],
            'Qty' => $row[15],
            'Weight' => $row[16],
            'StoreFlag' => $row[17],
            'RDMno' => $row[18],
            'CaseNo' => $row[19],
            'CoilNo' => $row[20],
            'ContainerNo' => $row[21],
            'Maker' => $row[22],
            'Shipper' => $row[23],
            'InvoiceNo' => $row[24],
            'DamageFlag' => $row[25],
            'Price' => $row[26],
            'EPTEflag' => $row[27],
            'KanbanNo' => $row[28],
            'Remark' => $row[29],
            'Vessel' => $row[30],
            'ContractNo' => $row[31],
            'UserCust' => $row[32],
            'LineSJ' => $row[33],
            'OutDate' => $row[34],
            'UsedWeight' => $row[35],
            'RewindWeight' => $row[36],
            'MatWidht' => $row[37],
            'EPAflag' => $row[38],
            'Bookflag' => $row[39],
            'GentaiNo' => $row[40],
            'PartNo' => $row[41],
            'PartName' => $row[42],
        ]);
    }
}
