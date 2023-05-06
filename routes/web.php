<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/eyetest', function () {
    return view('eyetest');
})->name('eyetest');

Route::get('/About Us', function () {
    return view('AboutUs');
})->name('About Us');

Route::get('/hospitals', function () {
    return view('hospitals');
})->name('hospitals');

Route::get('/articles', function () {
    return view('articles');
})->name('articles');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

Route::get('/eyetest/eyesighttest', function () {
    return view('eyesighttest');
})->name('eyesighttest');

Route::get('/eyetest/reactionspeedtest', function () {
    return view('reactionspeedtest');
})->name('reactionspeedtest');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/reports', function () { return view('reports');})->name('reports');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
