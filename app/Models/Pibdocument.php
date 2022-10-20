<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pibdocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'Car',
        'Serial',
        'KdFasDtl',
        'NoUrut',
        'DokKd',
        'DokNo',
        'DokTg',
        'KdGroupDok',
        'NoSeriBrgSkep',
    ];
}
