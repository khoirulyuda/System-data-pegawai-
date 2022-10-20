<?php

namespace App\Http\Controllers;

use App\Models\Pibcontainer;
use Illuminate\Http\Request;
use App\Imports\PibcontainerImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PibcontainerController extends Controller
{
     public function index(Request $request){
        if($request->has('search')){
            $data = Pibcontainer::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibcontainer::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/pibcon', compact('data'));
    }

    public function importpibcontainer(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('Pibcontainer', $namaFile);

        Excel::import(new PibcontainerImport, \public_path('Pibcontainer/'.$namaFile));
        return \redirect()->back();
    }

    public function deletepibcontainer($id){
       $data = Pibcontainer::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('pibcon')->with('success','Data Berhasil Di Hapus');
    }
}