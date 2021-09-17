<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth_controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\BidController;
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
    return view('welcome');
});
Route::get('login',[auth_controller::class,'index']);

Route::get('tambah',[UploadsController::class,'create']);
Route::get('Bid',[BidController::class,'create']);
Route::get('home1',[AdminController::class,'index']);
Route::get('home2',[AdminController::class,'indexc']);
Route::get('welcome',[AdminController::class,'indexz']);
Route::get('registeradmin',[AdminController::class,'indexa']);
Route::get('Barang',[UploadsController::class,'index']);
Route::get('Lelang',[UploadsController::class,'indexa']);
Route::post('proses_login',[auth_controller::class,'proses_login']);
Route::get('register', [RegisterController::class, 'registeration'])->name('register');
Route::post('submit-registration', [RegisterController::class, 'postRegistration'])->name('register.post');
Route::delete('Barang{id}',[UploadsController::class,'destroy']);
Route::delete('bid{id}',[BidController::class,'destroy']);
Route::post('simpan-data',[UploadsController::class,'store']);
Route::post('simpan-bid',[UploadsController::class,'stores']);
Route::get('logout', [auth_controller::class, 'logout']);
Route::get('/Barang/{id}/edit',[UploadsController::class,'edit']);
Route::patch('/Barang/{id}/update',[UploadsController::class,'update']);

Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cek_login:admin']],function(){
        Route::get('home1',[AdminController::class, 'index'])->name('home1');
});
Route::group(['middleware'=>['cek_login:member']],function(){
    Route::get('home2',[AdminController::class, 'indexc'])->name('home2');
    
});
});
