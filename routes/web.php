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

Route::get('/', function () {
    $data = ['name' => 'Santiago', 'surname' => 'Galvan'];
    return view('home', $data);
})->name('home');

Route::get('user', function () {
    $data = ['name' => 'Santiago', 'surname' => 'Galvan'];
    return view('user.user', $data);
})->name('user');
