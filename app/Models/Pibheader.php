<?php

namespace App\Models;

use App\Models\Incoming;
use App\Models\Outgoing;
use App\Models\Production;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pibheader extends Model
{
    use HasFactory;

    protected $primarykey = "id";
    protected $guarded = [];

    public function incomings(){
        return $this->belongsTo(Incoming::class)->withDefault();
    } 

    public function productions(){
        return $this->belongsTo(Production::class)->withDefault();
    } 

    public function outgoings(){
        return $this->belongsTo(Outgoing::class)->withDefault();
    } 
}
