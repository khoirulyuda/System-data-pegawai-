<?php

namespace App\Imports;

use App\Models\Incoming;
use App\Models\Pibheader;
use Maatwebsite\Excel\Concerns\ToModel;



class PibheaderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    protected $incomings;
    /* public function __construct()
    {
        //QUERY UNTUK MENGAMBIL SELURUH DATA USER
        $this->incomings = Incoming::select('id', 'GentaiNo')->get();
    } */

    public function transformDate($value, $format = 'YYYY-MM-DD')
{
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
}

    public function model(array $row)
    {
        
        return new Pibheader([
            'Car' => $row[0],
            'KdKpbc' => $row[1],
            'PibNo' => $row[2],                   
            'PibTg' => $this->transformDate($row[3]), 
            'JnPib' => $row[4],
            'JnImp' => $row[5],
            'JkWaktu' => $row[6],
            'CrByr' => $row[7],
            'DokTupKd' => $row[8],
            'DokTupNo' => $row[9],
            'DokTupTg' => $row[10],
            'PosNo' => $row[11],
            'PosSub' => $row[12],
            'PosSubSub' => $row[13],
            'ImpId' => $row[14],
            'ImpNpwp' => $row[15],
            'ImpNama' => $row[16],
            'ImpAlmt' => $row[17],
            'ImpStatus' => $row[18],
            'ApiKd' => $row[19],
            'ApiNo' => $row[20],
            'PpjkId' => $row[21],
            'PpjkNpwp' => $row[22],
            'PpjkNama' => $row[23],
            'PpjkAlmt' => $row[24],
            'PpjkNo' => $row[25],
            'PpjkTg' => $row[26],
            'IndId' => $row[27],
            'IndNpwp' => $row[28],
            'IndNama' => $row[29],
            'IndAlmt' => $row[30],
            'PasokNama' => $row[31],
            'PasokAlmt' => $row[32],
            'PasokNeg' => $row[33],
            'PelBkr' => $row[34],
            'PelMuat' => $row[35],
            'PelTransit' => $row[36],
            'TmpTbn' => $row[37],
            'Moda' => $row[38],
            'AngkutNama' => $row[39],
            'AngkutNo' => $row[40],
            'AngkutFl' => $row[41],
            'TgTiba' => $this->transformDate($row[42]),
            'KdVal' => $row[43],
            'Ndpbm' => $row[44],
            'NilInv' => $row[45],
            'Freight' => $row[46],
            'BTambahan' => $row[47],
            'Diskon' => $row[48],
            'KdAss' => $row[49],
            'Asuransi' => $row[50],
            'KdHrg' => $row[51],
            'Fob' => $row[52],
            'Cif' => $row[53],
            'Bruto' => $row[54],
            'Netto' => $row[55],
            'JmCont' => $row[56],
            'JmBrg' => $row[57],
            'Status' => $row[58],
            'Snrf' => $row[59],
            'KdFas' => $row[60],
            'Lengkap' => $row[61],
            'BillNpwp' => $row[62],
            'BillNama' => $row[63],
            'BillAlmt' => $row[64],
            'PenjualNama' => $row[65],
            'PenjualAlmt' => $row[66],
            'PenjualNeg' => $row[67],
            'Pernyataan' => $row[68],
            'JnsTrans' => $row[69],
            'VD' => $row[70],
            'VersiModul' => $row[71],
            
        ]);
    }
}
