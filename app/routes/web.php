<?php

use App\Http\Controllers\MidCareerEntryController;
use App\Http\Controllers\NewGraduateEntryController;
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

Route::get('/', fn () => redirect()->route('mid-career.index'));

Route::prefix('mid-career')->group(function () {
    Route::get('/', [MidCareerEntryController::class, 'index'])->name('mid-career.index');
    Route::post('/back', [MidCareerEntryController::class, 'back'])->name('mid-career.back');
    Route::post('/confirm', [MidCareerEntryController::class, 'confirm'])->name('mid-career.confirm');
    Route::post('/complete', [MidCareerEntryController::class, 'complete'])->name('mid-career.complete');
});

Route::prefix('new-graduate')->group(function () {
    Route::get('/', [NewGraduateEntryController::class, 'index'])->name('new-graduate.index');
    Route::post('/back', [NewGraduateEntryController::class, 'back'])->name('new-graduate.back');
    Route::post('/confirm', [NewGraduateEntryController::class, 'confirm'])->name('new-graduate.confirm');
    Route::post('/complete', [NewGraduateEntryController::class, 'complete'])->name('new-graduate.complete');
});
