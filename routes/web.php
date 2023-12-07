<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\DiscussionController;

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

Route::get('/', 'App\Http\Controllers\FrontendController@index'
);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/new-topic', function () {
    return view('cliente.new-topic');
});
Route::get('/category/overview/{id}', 'App\Http\Controllers\FrontendController@categoryOverview')->name('category.overview');

Route::get('/topic', function () {
    return view('cliente.topic');
});

Route::get('/forum/overview/{id}', 'App\Http\Controllers\FrontendController@forumOverview')->name('forum.overview');


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

route::get('dashboard/forums/{id}', [ForumController::class,'edit'])->name('forum');
route::get('dashboard/forums/edit/{id}', [ForumController::class,'edit'])->name('forum.edit');
route::post('dashboard/forums/update/{id}', [ForumController::class,'update'])->name('forum.update');
route::get('dashboard/forums/delete/{id}', [ForumController::class,'destroy'])->name('forum.destroy');

//Tópicos

route::get('client/topic/new/{id}', [DiscussionController::class,'create'])->name('topic.new');
route::post('client/forum/new', [DiscussionController::class,'store'])->name('topic.store');
// route::get('client/forums', [TopicController::class,'index'])->name('forums');

// route::get('client/topic/{id}', [TopicController::class,'edit'])->name('topic');
// route::get('client/topic/edit/{id}', [TopicController::class,'edit'])->name('topic.edit');
// route::post('clien/ttopic/update/{id}', [TopicController::class,'update'])->name('topic.update');
// route::get('client/topic/delete/{id}', [TopicController::class,'destroy'])->name('topic.destroy');





