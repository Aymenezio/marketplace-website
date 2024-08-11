<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/items/description', function () {
    return view('items.description');
})->name('description');


// Items Routes
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create')->middleware('auth');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/items/{item_id}/description', [ItemController::class, 'description'])->name('items.description');
Route::get('/items/user', [ItemController::class, 'userItems'])->name('items.user')->middleware('auth');
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy')->middleware('auth');
Route::get('/items/{item_id}/edit', [ItemController::class, 'edit'])->name('items.edit')->middleware('auth');
Route::put('/items/{item_id}', [ItemController::class, 'update'])->name('items.update')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
