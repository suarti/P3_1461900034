<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController;

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
Route::get('/pasien', [RumahSakitController::class,'index']);
Route::get('/pasien/tambah', [RumahSakitController::class,'tambah']);
Route::get('/pasien/hapus/{id}', [RumahSakitController::class,'hapus']);
Route::post('/pasien/store',[RumahSakitController::class,'store']);
Route::get('/pasien/edit/{id}',[RumahSakitController::class,'edit']);
Route::post('/pasien/update',[RumahSakitController::class,'update']);
Route::get('/pasien/cari',[RumahSakitController::class,'cari']);


