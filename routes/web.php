<?php

use App\Http\Controllers\ContentController;
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

Route::get('/home', [ContentController::class, 'index'] );

Route::get('/contents', [ContentController::class, 'about']);

Route::get('/bootcamp', function () {
    return view('bootcamp');
});

Route::get('/awalan', function () {
    return view('awalan');
});

