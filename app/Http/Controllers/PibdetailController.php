<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\Pibdetail;
use Illuminate\Http\Request;
use App\Exports\PibdetailExport;
use App\Imports\PibdetailImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PibdetailController extends Controller
{
     public function index(Request $request){
        if($request->has('search')){
            $data = Pibdetail::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Pibdetail::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/pibdetail', compact('data'));
    }

    public function editpibheader($id){
       $data = Pibdetail::find($id);
       //dd($data);
       return view('editpibheader', compact('data'));
    }

    public function updatepibheader(Request $request,$id){
       $data = Pibdetail::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('pibheader');
    }


    public function deletepibdetail($id){
       $data = Pibdetail::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('pibdetail')->with('success','Data Berhasil Di Hapus');
    }
    public function exportpdf(){
       $data = Pibdetail::all();
        view()->share('data',$data);
         $pdf = PDF::loadView('DataProduction-pdf');
         return $pdf->download('pdfview.pdf');
    }

    public function pibdetailexcel(){
        return Excel::download(new PibdetailExport, 'DataProduction.xlsx');
    }

    public function importpibdetail(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('PibDtl', $namaFile);

        Excel::import(new PibdetailImport, \public_path('PibDtl/'.$namaFile));
        return \redirect()->back();

    }

}
