<?php

namespace App\Http\Controllers;

use App\Models\Pibdocument;
use Illuminate\Http\Request;

use App\Imports\PibdocumentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PibdocumentController extends Controller
{
    public function pibdoc(Request $request){
        if($request->has('search')){
            $data = Pibdocument::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibdocument::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/pibdocument', compact('data'));
    }

    public function importpibdocument(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('PibdocData', $namaFile);

        Excel::import(new PibdocumentImport, \public_path('PibdocData/'.$namaFile));
        return \redirect()->back();

    }
}
