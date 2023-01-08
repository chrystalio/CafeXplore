<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/details', function (){
    return view('details');
})->name('details');

Route::get('/cafe', [CafeController::class, 'index'])->name('cafe.index');
Route::post('/cafe', [CafeController::class, 'store'])->name('cafe.store');
Route::post('/rating/{cafe}', [RatingController::class, 'store'])->name('rating.store');


