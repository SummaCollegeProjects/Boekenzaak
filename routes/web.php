<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Boekenzaak/homepage', function () {
    return view('Boekenzaak/homepage');
});

Route::get('/Boekenzaak/account', function () {
    return view('Boekenzaak/account');
});