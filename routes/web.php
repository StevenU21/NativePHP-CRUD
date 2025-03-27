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
    return view('dashboard');
})->name('dashboard');

Route::get('/forms', function () {
    return view('sidebar/forms');
})->name('forms');

Route::get('/cards', function () {
    return view('sidebar/cards');
})->name('cards');

Route::get('/charts', function () {
    return view('sidebar/charts');
})->name('charts');

Route::get('/buttons', function () {
    return view('sidebar/buttons');
})->name('buttons');

Route::get('/modals', function () {
    return view('sidebar/modals');
})->name('modals');

Route::get('/tables', function () {
    return view('sidebar/tables');
})->name('tables');
