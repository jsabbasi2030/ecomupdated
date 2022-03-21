<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Request;

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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/home-page', [HomeController::class, 'index'])->name('home-page');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/add-category', [CategoryController::class, 'index'])->name('add-category');


Route::post('/save-cat', [CategoryController::class, 'save_category'])->name('save-cat');


Route::get('/all-category', [CategoryController::class, 'allCategory'])->name('all-category');

