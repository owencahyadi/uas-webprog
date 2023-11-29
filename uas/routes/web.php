<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\view;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(view::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/layout/navbar', 'navbar')->name('layout.navbar');
});

