<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Boekenzaak/homepage', function () {
    return view('Boekenzaak/homepage');
});

Route::get('/Boekenzaak/login', function () {
    return view('Boekenzaak/login');
});

Route::get('/Boekenzaak/createAccount', function () {
    return view('Boekenzaak/createAccount');
});