<?php

namespace App\Http\Controllers;

use App\Models\Outgoing;
use Illuminate\Http\Request;
use App\Exports\OutgoingExport;
use App\Imports\OutgoingImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class OutgoingController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Outgoing::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Outgoing::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/outgoing', compact('data'));
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

        $data = Outgoing::create($request->all());
        if($request->hasFile('foto')){
            $request -> file('foto') -> move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request -> file('foto')->getClientOriginalName();
            $data->save();
        }
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('Data Berhasil Di Tambahkan');
        }
        return redirect()->route('outgoing')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
       $data = Outgoing::find($id);
       //dd($data);
       return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request,$id){
       $data = Outgoing::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');
    }


    public function editoutgoing($id){
       $data = Outgoing::find($id);
       //dd($data);
       return view('editoutgoing', compact('data'));
    }

    public function updateoutgoing(Request $request,$id){
       $data = Outgoing::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('outgoing');
    }


    public function outgoingdelete($id){
       $data = Outgoing::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('outgoing')->with('success','Data Berhasil Di Hapus');
    }
    public function exportpdf(){
       $data = Outgoing::all();
        view()->share('data',$data);
         $pdf = PDF::loadView('DataOutgoing-pdf');
         return $pdf->download('pdfview.pdf');
    }

    public function outgoingexcel(){
        return Excel::download(new OutgoingExport, 'DataOutgoing.xlsx');
    }

    public function outgoingimport(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('OutgoingData', $namaFile);

        Excel::import(new OutgoingImport, \public_path('OutgoingData/'.$namaFile));
        return \redirect()->back();

    }
}
