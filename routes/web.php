<?php

use App\Http\Controllers\Renatha\RenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tambahResep', function () {
    return view('tudungsaji.tambahResep');
});


Route::get('/Login', function () {
    return view('tudungsaji.Login');
});

Route::get('/Profil', function () {
    return view('tudungsaji.Profil');
});

Route::get('/favorit', function () {
    return view('tudungsaji.Favorit');
});




