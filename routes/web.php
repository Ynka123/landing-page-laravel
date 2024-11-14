<?php
//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

//Route::get('/', function () {
//  return view('index'); // ke index blade php
//});

// Route::get('/welcome', function () {
//     return view('welcome'); // ke welcome kalo diketik welcome
// });

// Route::get('/login', function () {
//     return view('login'); // ke login kalo diketik login
// });

// Route::get('/about', function () {
//     return view('about'); // ke login kalo diketik about
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');