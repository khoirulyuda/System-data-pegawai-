<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\Production;
use Illuminate\Http\Request;
use App\Exports\productionexport;
use App\Imports\ProductionImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class ProductionController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Production::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Production::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/production', compact('data'));
    }

    public function tambahpegawai(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        /* $this->validate($request,[
                'nama' => 'required|min:4|max:255',
                'notelpon' => 'required|min:11|max:13',
        ]); */

        $data = Production::create($request->all());
        if($request->hasFile('foto')){
            $request -> file('foto') -> move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request -> file('foto')->getClientOriginalName();
            $data->save();
        }
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('Data Berhasil Di Tambahkan');
        }
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
       $data = Production::find($id);
       //dd($data);
       return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request,$id){
       $data = Production::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');
    }


    public function editproduction($id){
       $data = Production::find($id);
       //dd($data);
       return view('editproduction', compact('data'));
    }

    public function updateproduction(Request $request,$id){
       $data = Production::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('production');
    }


    public function productiondelete($id){
       $data = Production::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('production')->with('success','Data Berhasil Di Hapus');
    }
    public function exportpdf(){
       $data = Production::all();
        view()->share('data',$data);
         $pdf = PDF::loadView('DataProduction-pdf');
         return $pdf->download('pdfview.pdf');
    }

    public function productionexcel(){
        return Excel::download(new productionexport, 'DataProduction.xlsx');
    }

    public function productionimport(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('ProductionData', $namaFile);

        Excel::import(new ProductionImport, \public_path('ProductionData/'.$namaFile));
        return \redirect()->back();

    }
}
