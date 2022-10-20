<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pibdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'Car',
        'Serial',
        'NoHs',
        'SeriTr',
        'BrgUrai',
        'Tipe',
        'SpfLain',
        'BrgAsal',
        'DNilInv',
        'DCif',
        'KdSat',
        'JmlSat',
        'KemasJn',
        'KemasJm',
        'SatBmJm',
        'SatCukJm',
        'NettoDtl',
        'KdFasDtl',
        'DtlOk',
        'FlBarangBaru',
        'FlLartas',
        'KatLartas',
        'SpekTarif',
        'DNilCuk',
        'JmPC',
        'SaldoAwalPc',
        'SaldoAkhirPc',
    ];
    
    
}
