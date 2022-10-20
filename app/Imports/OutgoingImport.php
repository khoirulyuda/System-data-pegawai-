<?php

namespace App\Imports;

use App\Models\Outgoing;
use Maatwebsite\Excel\Concerns\ToModel;

class OutgoingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Outgoing([
            'SJnumber' => $row[1],
            'SJdate' => $row[2],
            'CustomerName' => $row[3],
            'MainCustomer' => $row[4],
            'KanbanNo' => $row[5],
            'SPC' => $row[6],
            'MC' => $row[7],
            'MossiNo' => $row[8],
            'GentaiNo' => $row[9],
            'Thick' => $row[10],
            'X1' => $row[11],
            'Width' => $row[12],
            'X2' => $row[13],
            'Length1' => $row[14],
            'X3' => $row[15],
            'Length2' => $row[16],
            'PCS' => $row[17],
            'Case' => $row[18],
            'KgPcs' => $row[19],
            'Weight' => $row[20],
            'SpecName' => $row[21],
            'Coating' => $row[22],
            'Usumebiki' => $row[23],
            'EPTEflag' => $row[24],
            'Remark' => $row[25],
            'ContractNo' => $row[26],
            'Maker' => $row[27],
            'DeliveryTo' => $row[28],
            'PoNo' => $row[29],
            'RemarkOrderRefNo' => $row[30],
            'Transportir' => $row[31],
            'Truck' => $row[32],
        ]);
    }
}
