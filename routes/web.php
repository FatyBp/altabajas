<?php

use App\Http\Controllers\Datos;
use App\Models\Dato;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[Datos::class,'index']);
Route::get('/create',[Datos::class,'create']);
Route::post('/store',[Datos::class,'store']);
Route:: get('/edit/{id}', [Datos::class, 'edit'])->name('edit');
Route::put('update/{id}', [Datos::class, 'update'])->name('update');
Route::get('/show/{id}',[Datos::class,'show'])->name('show');
Route::delete('/destroy/{id}',[Datos:: class, 'destroy'])->name('destroy');


