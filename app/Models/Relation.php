<?php

namespace App\Models;

use App\Models\Employee;
use App\Models\Outgoing;
use App\Models\Pibheader;
use App\Models\Production;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relation extends Model
{
    use HasFactory;
    protected $table = 'Relation';
    protected $guarded = [];

    public function pibheader(){
        return $this->hasMany(Pibheader::class);
    }
    public function employee(){
        return $this->hasMany(Employee::class);
    }
    public function production(){
        return $this->hasMany(Production::class);
    }
    public function outgoing(){
        return $this->hasMany(Outgoing::class);
    }
}
