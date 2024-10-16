<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // ke index blade php
});

Route::get('/welcome', function () {
    return view('welcome'); // ke welcome kalo diketik welcome
});

Route::get('/login', function () {
    return view('login'); // ke login kalo diketik login
});