<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/new-topic', function () {
    return view('cliente.new-topic');
});
Route::get('/c-overview', function () {
    return view('cliente.category-overview');
});
Route::get('/topic', function () {
    return view('cliente.topic');
});
route::get('dashboard/home', [DashboardController::class,'home']);

route::get('dashboard/category/new', [CategoryController::class,'create'])->name('category.new');
route::post('dashboard/category/new',[CategoryController::class,'store'])->name('category.store');
route::get('dashboard/categories', [CategoryController::class,'index'])->name('categories');
route::get('dashboard/categories/{id}', [CategoryController::class,'show'])->name('category');
route::get('dashboard/categories/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
route::post('dashboard/categories/edit/{id}', [CategoryController::class,'update'])->name('category.update');
route::get('dashboard/categories/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');

//forum

route::get('dashboard/forum/new', [ForumController::class,'create'])->name('forum.new');

route::post('dashboard/forum/new', [ForumController::class,'store'])->name('forum.store');

route::get('dashboard/forums', [ForumController::class,'index'])->name('forums');






