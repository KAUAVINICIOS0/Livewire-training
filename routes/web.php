<?php

use Illuminate\Support\Facades\Route;

Route::get('/form-create-color', function () {
    return view('form-create-color');
})->name('form-create-color');