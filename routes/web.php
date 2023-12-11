<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAccessReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/access/index', [UserAccessReviewController::class, 'index'])->name('access.index');
Route::post('/access/store', [UserAccessReviewController::class, 'store'])->name('access.store');
Route::get('/access/view/{item_id}',[UserAccessReviewController::class, 'view'])->name('access.view');
Route::get('/access/invoice}',[UserAccessReviewController::class, 'invoice'])->name('access.invoice');


