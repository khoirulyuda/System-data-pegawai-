<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = user::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
            Session::put('halaman_url', request()->fullUrl());
        }else{
            $data = user::paginate(25);
            Session::put('halaman_url', request()->fullUrl());
        }

        return view('/user', compact('data'));
    }
    public function login(){
        return view('menu');
    }
    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/login');
        }

        return redirect('menu');
    }

    public function loginroot(){
        return view('root');
    }
    public function loginprosesroot(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            /* dd($request->all()); */
            return redirect('/superadmin');
        }

        return redirect('/');
    }

    
    public function superadmin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            /* dd($request->all()); */
            return redirect('/superadmin');
        }

        return redirect('/');
    }

    public function loginsales(){
        return view('/loginsales');
    }
    public function loginprosessales(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/sales');
        }

        return redirect('/');
    }

    public function loginproduction(){
        return view('loginproduction');
    }
    public function loginprosesproduction(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/production');
        }

        return redirect('/');
    }

    public function loginexim(){
        return view('loginexim');
    }
    public function loginprosesexim(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/exim');
        }

        return redirect('/');
    }

    public function loginoutgoing(){
        return view('loginoutgoing');
    }
    public function loginprosesoutgoing(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/outgoing');
        }

        return redirect('/');
    }

    public function register(){
        return view('rgst');
    }

    public function registeruser(Request $request){
        /* dd($request->all()); */
         user::create([
            'name'=>$request->name,
            'jeniskelamin'=>$request->jeniskelamin,
            'role'=>$request->role,
            'notelpon'=>$request->notelpon,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>Str::random(60),
         ]);
        /*  dd($request->all()); */
        return redirect()->route('user')->with('success','Data Berhasil Di Tambahkan');
    }

    public function edituser($id){
       $data = user::find($id);
       //dd($data);
       return view('edituser', compact('data'));
    }

    public function updateuser(Request $request,$id){
       $data = user::find($id);
       $data->update($request->all());
        if(session('halaman_url')){
            return redirect(session('halaman_url'))->with('success','Data Berhasil Di Update');
        }

       return redirect()->route('user')->with('success','Data Berhasil Di Update');
    }

    public function deleteuser($id){
       $data = user::find($id);
       $data->delete();
        if(session('halaman_url')){
              return redirect(session('halaman_url'))->with('success','Data Berhasil Di Hapus');
            }
        return redirect()->route('/user')->with('success','Data Berhasil Di Hapus');
        }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
