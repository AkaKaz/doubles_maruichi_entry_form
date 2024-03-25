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

Route::group([
    'prefix' => 'mid-career',
    'as' => 'mid-career.',
], function () {
    Route::get('/', [MidCareerEntryController::class, 'index'])->name('index');
    Route::post('/back', [MidCareerEntryController::class, 'back'])->name('back');
    Route::post('/confirm', [MidCareerEntryController::class, 'confirm'])->name('confirm');
    Route::post('/complete', [MidCareerEntryController::class, 'complete'])->name('complete');
});

Route::group([
    'prefix' => 'new-graduate',
    'as' => 'new-graduate.',
], function () {
    Route::get('/', [NewGraduateEntryController::class, 'index'])->name('index');
    Route::post('/back', [NewGraduateEntryController::class, 'back'])->name('back');
    Route::post('/confirm', [NewGraduateEntryController::class, 'confirm'])->name('confirm');
    Route::post('/complete', [NewGraduateEntryController::class, 'complete'])->name('complete');
});
