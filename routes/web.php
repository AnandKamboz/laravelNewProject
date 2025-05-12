<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PppIntegrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ppp-details', [PppIntegrationController::class, 'index'])->name('ppp.details');


Route::fallback(function(){
   return view('fallback');
});

require __DIR__.'/auth.php';
