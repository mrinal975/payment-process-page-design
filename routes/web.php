<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/mail', function () {
    return view('verification-mail');
})->name('mail');

Route::get('/create-account', function () {
    return view('createAccount');
})->name('create-account');

Route::get('/completion', function () {
    return view('accountCompletion');
})->name('completion');
