<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/create-account', function () {
    return view('createAccount');
})->name('create-account');
