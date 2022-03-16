<?php

use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return redirect()->route('welcome');
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('welcome');
    Route::get('/friends', [FriendController::class, 'index'])->name('friends');
    Route::get('/all-users', [FriendController::class, 'users'])->name('users');
    Route::get('/follow/{user}', [FriendController::class, 'follow'])->name('user.follow');

});

require __DIR__ . '/auth.php';
