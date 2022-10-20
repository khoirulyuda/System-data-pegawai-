<?php

namespace App\Http\Controllers;

use App\Models\Ceisa;
use App\Imports\CeisaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class CeisaController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Ceisa::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Ceisa::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/ceisa', compact('data'));
    }

    public function importceisa(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('CeisaData', $namaFile);

        Excel::import(new CeisaImport, \public_path('CeisaData/'.$namaFile));
        return \redirect()->back();

    }

    public function deleteceisa($id){
       $data = Ceisa::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('/ceisa')->with('success','Data Berhasil Di Hapus');
    }
}