<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoundsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\TemplateController@index');

/* 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/dashboard', function () {
    return view('/FrontEnd/home');
})->name('home');

Route::get('/home', function () {
    return view('/FrontEnd/home');
})->name('home');

Route::get('/music', function () {
    return view('/FrontEnd/music');
})->name('music');

Route::get('/about', function () {
    return view('/FrontEnd/about');
})->name('about');

Route::get('/contact', function () {
    return view('/FrontEnd/contact');
})->name('contact');

Route::get('/faqs', function () {
    return view('/FrontEnd/faqs');
})->name('faqs');

Route::get('/music2', function () {
    return view('/FrontEnd/music2');
})->name('music2');

Route::get('/music3', function () {
    return view('/FrontEnd/music3');
})->name('music3');

Route::get('/music4', function () {
    return view('/FrontEnd/music4');
})->name('music4');

Route::get('/music5', function () {
    return view('/FrontEnd/music5');
})->name('music5');

Route::get('/music6', function () {
    return view('/FrontEnd/music6');
})->name('music6');

Route::get('/music7', function () {
    return view('/FrontEnd/music7');
})->name('music7');
Route::get('/menu', function () {
    return view('/auth/register');
})->name('register');

Route::get("search", [SoundsController::class,'search']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
