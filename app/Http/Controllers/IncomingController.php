<?php

namespace App\Http\Controllers;

use App\Models\Incoming;
use Illuminate\Http\Request;
use App\Imports\IncomingImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class IncomingController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Incoming::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Incoming::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/datang', compact('data'));
    }

    public function sales(Request $request){
        if($request->has('search')){
            $data = Incoming::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Incoming::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/sales', compact('data'));
    }

    public function importincoming(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('incoming', $namaFile);

        Excel::import(new IncomingImport, \public_path('incoming/'.$namaFile));
        return \redirect()->back();
    }

    /* public function editincoming($id){
       $data = Incoming::find($id);
       //dd($data);
       return view('editincoming', compact('data'));
    }

    public function updateincoming(Request $request,$id){
       $data = Incoming::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('sales');
    } */

    public function tampilkandata($id){
       $data = Incoming::find($id);
       //dd($data);
       return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request,$id){
       $data = Incoming ::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('sales')->with('success','Data Berhasil Di Update');
    } 


}