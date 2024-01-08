<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/**
 * Ruta principal
 */
Route::get('/', function () {
    return view('inicio');
});



/**
 * Cambio de lenguaje
 */
Route::get('/language/{locale}', function ($locale) {

    App::setLocale($locale);
    Session::put('locale', $locale);

    return redirect()->back();
});

Route::get('/welcome', function () {
    return view('welcome');
});
