<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dati', function () {
    return view('dati');
});


Route::get('/registrarsi', function () {
    return view('components\registrarsi');
});



Route::get('/partner', function () {
    return view('components\partner');
});


Route::get('/cardToys', function () {
    return view('components\cardToys');
});


Route::get('/card', function () {
    return view('components\card');
});

Route::get('/personCard', function () {
    return view('components\personCard');
});



Route::get('/cardToysCenter', function () {
    return view('cardToysCenter');
});

Route::get('/layouts/benvenuto', function () {
    return view('layouts/benvenuto');
});
