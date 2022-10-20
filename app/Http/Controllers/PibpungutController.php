<?php

namespace App\Http\Controllers;


use App\Models\Pibpungut;
use Illuminate\Http\Request;
use App\Imports\PibpungutImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PibpungutController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Pibpungut::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibpungut::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/pibpungut', compact('data'));
    }

    public function importpibpungut(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('PibpungutData', $namaFile);

        Excel::import(new PibpungutImport, \public_path('PibpungutData/'.$namaFile));
        return \redirect()->back();

    }

    public function pibpungutdelete($id){
       $data = Pibpungut::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('/pibpungut')->with('success','Data Berhasil Di Hapus');
    }
}
