<?php

use App\Http\Controllers\dataSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\hasInputted;

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

Route::view('/', 'index')->name('index');

Route::controller(dataSiswaController::class)->group(function () {
        Route::post('/edit', 'edit')->name('edit');
        Route::get('/edit', 'edit')->name('editing');
        Route::post('/search', 'search')->name('search');
        Route::get('/search', 'search')->name('searching');
        Route::post('/', 'update')->name('update');
});