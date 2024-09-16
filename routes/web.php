<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;

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
Route::resource('guru', GuruController::class)->middleware('isLogin');
// Route::get('guru',[GuruController::class,'index']);
// Route::get('guru/{id}',[GuruController::class,'detail'])->where('id', '[0-9]+');


Route::get('/',[HalamanController::class,'index']);
Route::get('/kontak',[HalamanController::class,'kontak']);
Route::get('/tentang',[HalamanController::class,'tentang']);
     
Route::get('/sesi', [SessionController::class,'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class,'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class,'logout']);
Route::get('/sesi/register', [SessionController::class,'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class,'create'])->middleware('isTamu');

Route::get('/', function() {
    return view('sesi/welcome');
})->middleware('isTamu');
