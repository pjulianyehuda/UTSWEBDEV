<?php

use App\Http\Controllers\BrandmobilController;
use App\Http\Controllers\MobilController;
use App\Models\brandmobil;
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
    return view('brandmobil.index');
});

// Route::resource('brandmobil', BrandmobilController::class);
// Route::get('/',[BrandmobilController::class, 'index'])->name('index');
