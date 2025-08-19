<?php

use Illuminate\Support\Facades\Route;

Route::get('/form-read-color', function(){
    return view('form-read-color');
})->name('form-read-color');

Route::get('/form-create-color', function () {
    return view('form-create-color');
})->name('form-create-color');