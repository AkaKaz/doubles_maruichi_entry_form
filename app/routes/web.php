<?php

use App\Http\Controllers\EntryFormController;
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

Route::get('/', [EntryFormController::class, 'index']);
Route::post('/back', [EntryFormController::class, 'back']);
Route::post('/confirm', [EntryFormController::class, 'confirm']);
