<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/categories/{id}',  [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/block/user/{id}', [UserController::class, 'blockUser'])->name('block.user');
    Route::get('/events/pending', [EventController::class, 'pendingEvents'])->name('events.pending');
    Route::post('/events/{event}/accept', [EventController::class, 'accept'])->name('event.accept');
    Route::post('/events/{event}/reject', [EventController::class, 'reject'])->name('event.reject');
});



Route::middleware(['auth', 'role:organizer'])->group(function () {
});





Route::middleware(['auth', 'role:user'])->group(function () {
});








Route::middleware('auth')->group(function () {
    Route::get('/events/{id}', [EventController::class, 'show'])->name('event.details');
    Route::get('/events', [EventController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
