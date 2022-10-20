<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Employee::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Employee::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/user', compact('data'));
    }

    public function superadmin(Request $request){
        if($request->has('search')){
            $data = Employee::where('PibNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Employee::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        $jumlahcust1 = Employee::where('UserCust','INDOMOBIL')->count();
        $jumlahcustomer = Employee::where('UserCust','M M K I')->count();
        $jumlahdata = Employee::count();

        return view('/superadmin', compact('data', 'jumlahcust1', 'jumlahcustomer', 'jumlahdata'));
    }

    public function sales(Request $request){
        if($request->has('search')){
            $data = Employee::where('InvoiceNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Employee::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        $jumlahcust1 = Employee::where('UserCust','INDOMOBIL')->count();
        $jumlahcustomer = Employee::where('UserCust','M M K I')->count();
        $jumlahdata = Employee::count();

        return view('/sales', compact('data', 'jumlahcust1', 'jumlahcustomer', 'jumlahdata'));

    }
    public function production(Request $request){
        if($request->has('search')){
            $data = Employee::where('InvoiceNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Employee::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        $jumlahcust1 = Employee::where('UserCust','INDOMOBIL')->count();
        $jumlahcustomer = Employee::where('UserCust','M M K I')->count();
        $jumlahdata = Employee::count();

        return view('/production', compact('data', 'jumlahcust1', 'jumlahcustomer', 'jumlahdata'));

    }
    public function exim(Request $request){
        if($request->has('search')){
            $data = Employee::where('InvoiceNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Employee::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        $jumlahcust1 = Employee::where('UserCust','INDOMOBIL')->count();
        $jumlahcustomer = Employee::where('UserCust','M M K I')->count();
        $jumlahdata = Employee::count();

        return view('/exim', compact('data', 'jumlahcust1', 'jumlahcustomer', 'jumlahdata'));

    }
    public function outgoing(Request $request){
        if($request->has('search')){
            $data = Employee::where('InvoiceNo', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = Employee::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        $jumlahcust1 = Employee::where('UserCust','INDOMOBIL')->count();
        $jumlahcustomer = Employee::where('UserCust','M M K I')->count();
        $jumlahdata = Employee::count();

        return view('/outgoing', compact('data', 'jumlahcust1', 'jumlahcustomer', 'jumlahdata'));

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

        $data = Employee::create($request->all());
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
       $data = Employee::find($id);
       //dd($data);
       return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request,$id){
       $data = Employee::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');
    }


    public function editincoming($id){
       $data = Employee::find($id);
       //dd($data);
       return view('editincoming', compact('data'));
    }

    public function updateincoming(Request $request,$id){
       $data = Employee::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('superadmin');
    }


    public function delete($id){
       $data = Employee::find($id);
       $data->delete();
       if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
        }
       return redirect()->route('pegawai')->with('success','Data Berhasil Di Hapus');
    }
    public function exportpdf(){
       $data = Employee::all();
        view()->share('data',$data);
         $pdf = PDF::loadView('dataMossi-pdf');
         return $pdf->download('pdfview.pdf');
    }

    public function exportexcel(){
        return Excel::download(new EmployeeExport, 'dataMossi.xlsx');
    }

    public function importexcel(Request $request){
        $data = $request->file('file');

        $namaFile = $data->getClientOriginalName();
        $data->move('EmployeeData', $namaFile);

        Excel::import(new EmployeeImport, \public_path('EmployeeData/'.$namaFile));
        return \redirect()->back();

    }
}