<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\Relation;

class RelationController extends Controller
{
    public function show($id){
        $pibno = Relation::find($id)->pibheader->PibNo;
        /* $gentaino = Relation::find($id)->pibheader->GentaiNo;
        $MossiNo = Relation::find($id)->pibheader->MossiNo;
        $SJno = Relation::find($id)->pibheader->SJnumber; */
        return view('relation', ['PibNo'=>$pibno]);
    }
}
