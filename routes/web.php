<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\CompanyController;

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
    return view('index');
});

Route::get('explain', function () {
    return view('explain');
})->name('explain');  // この行を追加

Route::get('user/login', function () {
    return view('user/login');
})->name('user.login');  // URL と名前を修正

Route::get('company/login', function () {
    return view('company/login');
})->name('company.login');  // URL と名前を修正



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
