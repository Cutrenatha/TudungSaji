<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function(){
    return view('tudungsaji.beranda');
});

Route::get('/profil', function(){
    return view('tudungsaji.profil');
});

Route::get('/tambahresep', function(){
    return view('tudungsaji.tambahResep');
});

Route::get('/login', function(){
    return view('tudungsaji.Login');
});

Route::get('/favorit', function(){
    return view('tudungsaji.Favorit');
});

Route::get('/tipsmasak', function(){
    return view('tudungsaji.tipsmasak');
});

Route::get('/dashboard', function(){
    return view('tudungsaji.dashboard');
});

Route::get('/resepmasakan', function(){
    return view('tudungsaji.resepmasakan');
});

Route::get('/resepspaghetti', function(){
    return view('tudungsaji.spaghetti');
});

Route::get('/register', function(){
    return view('tudungsaji.register');
});
