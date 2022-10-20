<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CeisaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\OutgoingController;
use App\Http\Controllers\PibdetailController;
use App\Http\Controllers\PibHeaderController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\PibcontainerController;
use App\Http\Controllers\PibdocumentController;
use App\Http\Controllers\PibpungutController;
use App\Http\Controllers\RelationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/menu');
});

Route::group(['middleware' => ['auth', 'hakakses:Super Admin,']], function(){
   Route::get('/user', [LoginController::class, 'index'])->name('user');
  /*  Route::get('/superadmin', [EmployeeController::class, 'superadmin'])->name('superadmin'); */
   
   Route::get('/edituser/{id}', [LoginController::class, 'edituser'])->name('edituser');
   Route::post('/updateuser/{id}', [LoginController::class, 'updateuser'])->name('updateuser');
   Route::get('/deleteuser/{id}', [LoginController::class, 'deleteuser'])->name('deleteuser');
});


Route::group(['middleware' => ['auth', 'hakakses:Supervisor Sales, Leader Sales, Admin Sales']], function(){
   Route::get('/datang', [IncomingController::class, 'index'])->name('datang');
});

Route::group(['middleware' => ['auth', 'hakakses:Supervisor Sales, Leader Sales,']], function(){
    Route::get('/tampilkandata/{id}', [IncomingController::class, 'tampilkandata'])->name('tampilkandata');
    Route::post('/updatedata/{id}', [IncomingController::class, 'updatedata'])->name('updatedata');
});




Route::get('/production', [ProductionController::class, 'index'])->name('production');
Route::get('/editproduction/{id}', [ProductionController::class, 'editproduction'])->name('editproduction');
Route::post('/updateproduction/{id}', [ProductionController::class, 'updateproduction'])->name('updateproduction');


Route::get('/outgoing', [OutgoingController::class, 'index'])->name('outgoing');
Route::get('/superadmin', [PibHeaderController::class, 'index'])->name('superadmin');
Route::get('/pibdetail', [PibdetailController::class, 'index'])->name('pibdetail');
Route::get('pibcon', [PibcontainerController::class, 'index'])->name('pibcontainer');
Route::get('/pibdocument', [PibdocumentController::class, 'pibdoc']);
Route::get('pibpungut', [PibpungutController::class, 'index'])->name('pibpungut');
Route::get('/ceisa', [PibHeaderController::class, 'ceisa'])->name('ceisa');
Route::get('/relasi', [PibHeaderController::class, 'relasi'])->name('relasi');
Route::get('/eximbc', [PibHeaderController::class, 'eximbc'])->name('eximbc');
Route::get('/detail/{id}', [PibHeaderController::class, 'showdetail'])->name('detail');




Route::get('/rgst', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');


Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [IncomingController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [IncomingController::class, 'updatedata'])->name('updatedata');





Route::get('/editoutgoing/{id}', [OutgoingController::class, 'editoutgoing'])->name('editoutgoing');
Route::post('/updateoutgoing/{id}', [OutgoingController::class, 'updateoutgoing'])->name('updateoutgoing');

Route::get('/editpibheader/{id}', [PibHeaderController::class, 'editpibheader'])->name('editpibheader');
Route::post('/updatepibheader/{id}', [PibHeaderController::class, 'updatepibheader'])->name('updatepibheader');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');

Route::get('/deleteceisa/{id}', [CeisaController::class, 'deleteceisa'])->name('deleteceisa');
Route::get('/productiondelete/{id}', [ProductionController::class, 'productiondelete'])->name('productiondelete');
Route::get('/deletepibheader/{id}', [PibHeaderController::class, 'deletepibheader'])->name('deletepibheader');
Route::get('/deletepibdetail/{id}', [PibdetailController::class, 'deletepibdetail'])->name('deletepibdetail');
Route::get('/deletepibcontainer/{id}', [PibcontainerController::class, 'deletepibcontainer'])->name('deletepibcontainer');
Route::get('/deletepibdok/{id}', [PibdokController::class, 'deletepibdok'])->name('deletepibdok');
Route::get('/pibpungutdelete/{id}', [PibpungutController::class, 'pibpungutdelete'])->name('pibpungutdelete');

//Export PDF
Route::get('/exportpdf', [EmployeeController::class, 'exportpdf'])->name('exportpdf');

//Export Excel
Route::get('/exportexcel', [EmployeeController::class, 'exportexcel'])->name('exportexcel');
Route::get('/productionexcel', [ProductionController::class, 'productionexcel'])->name('productionexcel');
Route::get('/outgoingexcel', [OutgoingController::class, 'outgoingexcel'])->name('outgoingexcel');

//Import Excel
Route::post('/importexcel', [EmployeeController::class, 'importexcel'])->name('importexcel');
Route::post('/importceisa', [CeisaController::class, 'importceisa'])->name('importceisa');
Route::post('/productionimport', [ProductionController::class, 'productionimport'])->name('productionimport');
Route::post('/outgoingimport', [OutgoingController::class, 'outgoingimport'])->name('outgoingimport');
Route::post('/importpibheader', [PibHeaderController::class, 'importpibheader'])->name('importpibheader');
Route::post('/importpibdetail', [PibdetailController::class, 'importpibdetail'])->name('importpibdetail');
Route::post('/importpibcontainer', [PibcontainerController::class, 'importpibcontainer'])->name('importpibcontainer');
Route::post('/importpibdocument', [PibdocumentController::class, 'importpibdocument'])->name('importpibdocument');
Route::post('/importpibpungut', [PibpungutController::class, 'importpibpungut'])->name('importpibpungut');
Route::post('/importincoming', [IncomingController::class, 'importincoming'])->name('importincoming');

/* Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses'); */

Route::get('/root', [LoginController::class, 'loginroot'])->name('loginroot');
Route::post('/loginprosesroot', [LoginController::class, 'loginprosesroot'])->name('loginprosesroot');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/loginsales', [LoginController::class, 'loginsales'])->name('loginsales');
Route::post('/loginprosessales', [LoginController::class, 'loginprosessales'])->name('loginprosessales');
Route::get('/sales', [IncomingController::class, 'sales'])->name('sales');

Route::get('/loginproduction', [LoginController::class, 'loginproduction'])->name('loginproduction');
Route::post('/loginprosesproduction', [LoginController::class, 'loginprosesproduction'])->name('loginprosesproduction');
Route::get('/production', [ProductionController::class, 'index'])->name('production');

Route::get('/loginexim', [LoginController::class, 'loginexim'])->name('loginexim');
Route::post('/loginprosesexim', [LoginController::class, 'loginprosesexim'])->name('loginprosesexim');
Route::get('/exim', [PibHeaderController::class, 'exim'])->name('exim');

Route::get('/loginoutgoing', [LoginController::class, 'loginoutgoing'])->name('loginoutgoing');
Route::post('/loginprosesoutgoing', [LoginController::class, 'loginprosesoutgoing'])->name('loginprosesoutgoing');
Route::get('/outgoing', [OutgoingController::class, 'index'])->name('outgoing');



Route::get('/logout', [LoginController::class, 'logout'])->name('logout');