<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('/navbar', function () {
    return view('admin.nav');
});

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dash');

Route::get('/sidebar', function () {
    return view('admin.sidebar');
});

Route::get('/create', function () {
    return view('admin.create');
})->name('form');

Route::get('/edit', function () {
    return view('admin.edit');
});





Route::resource('admin', AdminController::class);


Route::resource('category', CategoryController::class);




Route::get('/sidebar', function () {
    return view('dashboard.sidebar');
});

Route::get('/navbar', function () {
    return view('dashboard.navbar');
});

Route::get('/dashboard', function () {
    return view('dashboard.dash');
});