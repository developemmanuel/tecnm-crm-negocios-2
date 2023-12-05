<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('posts.login');
})->name('login');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){
    Route::get('/', function (){
        return view('app.home');
    })->name('dashboard');

    Route::get('reportes', function (){
        return view('app.reportes');
    })->name('reportes');

    Route::get('clientes', function (){
        return view('app.clientes');
    })->name('clientes');
});
