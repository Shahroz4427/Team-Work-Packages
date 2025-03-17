<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('frontend.about');

Route::get('/services', function () {
    return view('frontend.service');
})->name('frontend.service');

Route::get('/careers', function () {
    return view('frontend.career');
})->name('frontend.career');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
