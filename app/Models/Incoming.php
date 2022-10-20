<?php

namespace App\Models;

use App\Models\Pibheader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incoming extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function pibheader(){
        return $this->hasMany(Pibheader::class); 
    } 
}
