<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\AnaSehifeController::class, 'index'])->name('anasehife');
Route::get('/kategori/{kategory_ad}', [Controllers\KategoryController::class, 'index'])->name('kategori');
Route::get('/mehsul/{mehsul_ad}', [Controllers\MehsulController::class, 'index'])->name('mehsul');
Route::post('/axtar', [Controllers\MehsulController::class, 'axtar'])->name('axtar');
Route::get('/axtar', [Controllers\MehsulController::class, 'axtar'])->name('axtar');
Route::group(['prefix'=>'istifadeci'], function(){
	Route::get('qeydiyyat', [Controllers\IstifadeciController::class, 'qeydiyyat'])->name('qeydiyyat');
	Route::post('qeyd', [Controllers\IstifadeciController::class, 'qeyd'])->name('qeyd');
	Route::get('cixis', [Controllers\IstifadeciController::class, 'cixis'])->name('cixis');
});
