<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Students Routes
Route::controller(StudentsController::class)->prefix('students')->group(function () {
    Route::get('', 'index')->name('students');
    Route::get('create', 'create')->name('students.create');
    Route::post('store', 'store')->name('students.store');
    Route::get('edit/{id}', 'edit')->name('students.edit');
    Route::put('edit/{id}', 'update')->name('students.update');
    Route::delete('destroy/{id}', 'destroy')->name('students.destroy');
});

require __DIR__.'/auth.php';
