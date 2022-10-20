<?php

namespace App\Models;

use App\Models\Pibheader;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Relation;

class Employee extends Model
{
    use HasFactory;
    public $table = 'employee';
    protected $guarded = [];

    public function relation(){
        return $this->belongsToMany(Relation::class);
    }

    public function pibheader(){
        return $this->hasMany(Pibheader::class);
    }
}
