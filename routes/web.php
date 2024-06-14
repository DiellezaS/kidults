<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\InteressiController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::get('/dati', function () {
    return view('dati');
});




Route::get('/card', function () {
    return view('/card');
});

Route::get('/personCard', function () {
    return view('/personCard');
});



Route::post('/register', [AuthController::class, 'store'])->name('register');




Route::post('/login', [loginController::class, 'processForm'])->name('login');






Route::get('/check-toggles', [InteressiController::class, 'checkbox']);
Route::get('/cardToys',[InteressiController::class, 'checkbox_form']);
Route::get('/page2-section', [InteressiController::class, 'pg2Section']);
Route::get('/cardToysCenter', [InteressiController::class, 'pg2']);
Route::get('/dati', [InteressiController::class, 'dati']);
Route::get('/components.layouts.pg3-form', [InteressiController::class, 'pg3_form']);