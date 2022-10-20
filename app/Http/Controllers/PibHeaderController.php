<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\Pibheader;
use Illuminate\Http\Request;
use App\Exports\PibheaderExport;
use App\Imports\PibheaderImport;
use App\Models\Incoming;
use App\Models\Outgoing;
use App\Models\Production;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PibHeaderController extends Controller
{
    public function index(Request $request,){
        
        if($request->has('search')){
            $data = Pibheader::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->latest()->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        
        return view('/superadmin', compact('data'));
    }

    public function relasi(Request $request,){
        
        if($request->has('search')){
            $data = Pibheader::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->latest()->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        
        return view('/relasi', compact('data'));
    }

    public function ceisa(Request $request,){
        
        if($request->has('search')){
            $data = Pibheader::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->latest()->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        
        return view('/ceisa', compact('data'));
    }

    public function eximbc(Request $request,){
        
        if($request->has('search')){
            $data = Pibheader::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->latest()->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        
        return view('/eximbc', compact('data'));
    }

    public function sales(Request $request,){
        
        if($request->has('search')){
            $data = Pibheader::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->latest()->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        
        return view('/sales', compact('data'));
    }

    public function exim(Request $request,){
        
        if($request->has('search')){
            $data = Pibheader::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->latest()->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        }
        
        return view('/exim', compact('data'));
    }

    /* public function details( $id){
        
            $data = Pibheader::with('incomings', 'productions', 'outgoings')->find($id)->paginate(10);
            Session::put('halaman_url', request()->fullUrl());
        
        
        return view('/detail', compact('data'));
    } */
    

    public function showdetail($id){
        $data = Pibheader::find($id);
        $gentai = Incoming::all();
        $mossino = Production::all();
        $sjno = Outgoing::all();
       //dd($data);
       return view('detail', compact('data', 'gentai', 'mossino', 'sjno'));
    } 



    public function editpibheader($id){
       $data = Pibheader::find($id);
       $gentai = Incoming::all();
       $mossino = Production::all();
       $sjno = Outgoing::all();
       //dd($data);
       return view('editpibheader', compact('data', 'gentai', 'mossino', 'sjno'));
    }

    public function updatepibheader(Request $request,$id){
       $data = Pibheader::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route(back());
    }


    public function productiondelete($id){
       $data = Pibheader::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('production')->with('success','Data Berhasil Di Hapus');
    }
    public function exportpdf(){
       $data = PibHeader::all();
        view()->share('data',$data);
         $pdf = PDF::loadView('DataProduction-pdf');
         return $pdf->download('pdfview.pdf');
    }

    public function pibheaderexcel(){
        return Excel::download(new PibheaderExport, 'DataProduction.xlsx');
    }

    public function importpibheader(Request $request,){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('PibHdr', $namaFile);

        Excel::import(new PibheaderImport, \public_path('PibHdr/'.$namaFile));
        return \redirect()->back();

    }

    public function deletepibheader($id){
       $data = Pibheader::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('/pibheader')->with('success','Data Berhasil Di Hapus');
    }

    public function relasidata(){
        return view();
    }
}
