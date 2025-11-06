<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/layanankami', function () {
    return view('layanankami');
})->name('layanankami');

Route::get('/hubungikami', function () {
    return view('hubungikami');
})->name('hubungikami');

use App\Http\Controllers\ContactController;
Route::post('/hubungi-kami', [ContactController::class, 'submit'])->name('hubungikami.submit');
