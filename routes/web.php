<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\ContactController;

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

Route::get('/dashboard', function () {
    return view('dashboard.dash');
})->name('dashboard');

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

// Route::resource('contact', ContactController::class);


Route::get('/sidebar', function () {
    return view('dashboard.sidebar');
});

Route::get('/navbar', function () {
    return view('dashboard.navbar');
});

Route::get('/dashboard', function () {
    return view('dashboard.dash');
});


Route::get('/', [FrontpageController::class, 'home'])->name('dash');
Route::get('/blog/{id}', [FrontpageController::class, 'show'])->name('view');
Route::get('/blog-category/{id}', [FrontpageController::class, 'blogcategory'])->name('bcat');



Route::get('/front', function () {
    return view('frontpage.nav');
});

Route::get('/foot', function () {
    return view('frontpage.footer');
})->name('footer');

Route::get('/blog', [FrontpageController::class, 'blog'])->name('blogpage');


