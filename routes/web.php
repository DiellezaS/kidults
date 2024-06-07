<?php

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



Route::get('/cardToysCenter', function () {
    return view('cardToysCenter');
});


