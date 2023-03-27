<?php

use App\Http\Controllers\API\ArtikelController;
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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/cms/data-artikel', function () {
    return view('backend.artikel');
});

Route::get('/home/get', [ArtikelController::class, 'index'])->name('getData.artikel');
Route::post('/artikel/create', [ArtikelController::class, 'store'])->name('createData.asrtikel');