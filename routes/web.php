<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PayController;
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

Route::get('/home', function () {
    return view('welcome');
})->name("inicio");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource("projects",ProjectController::class);
    Route::get('projects-delete/{project}',[ProjectController::class,'delete'])->name('projects.delete');
    Route::get('projects-edit/{project}',[ProjectController::class,'edit'])->name('projects.edit');


    Route::resource("pays",PayController::class);
    Route::get('pays-delete/{pay}',[PayController::class,'delete'])->name('pays.delete');

});

Route::get('/base', function () {
    return view('layouts.base');
});







require __DIR__.'/auth.php';
