<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HospitalController;
use App\Models\Report;

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

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


// Eyesight pages
Route::get('/eyetest', function () {
    return view('eyetest');
})->name('eyetest');

Route::get('/eyetest/eyesighttest', function () {
    return view('eyesighttest');
})->name('eyesighttest');

Route::get('/eyetest/reactionspeedtest', function () {
    return view('reactionspeedtest');
})->name('reactionspeedtest');

Route::get('/eyetest/colorblindnesstest', function () {
    return view('colorblindnesstest');
})->name('colorblindnesstest');

Route::get('/eyetest/farnsworthtest', function () {
    return view('farnsworthtest');
})->name('farnsworthtest');


// About us page
Route::get('/About Us', function () {
    return view('AboutUs');
})->name('About Us');


// Hospitals page
Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals');


// Articles pages
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');


// Chat page
Route::get('/chat', function () {
    return view('chat');
})->name('chat');


// Dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Reports page
Route::get('/reports', [ReportController::class, 'index'])->middleware('auth')->name('reports');

Route::post('/reports', [ReportController::class, 'store'])->middleware('auth')->name('reports.create');

// Profile editing pages
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
