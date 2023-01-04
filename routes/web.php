<?php

// use App\Models\Post;
// use App\Models\User;
// use App\Http\Controllers\DashboardController;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginSampleController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active"    => "home",
    ]);
});


// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name"  => "edi lesdianto",
        "email" => "edilesdianto@gmail.com",
        "img"   => "bg2.png",
        "active"    => "about",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title'    => 'Post Categories',
        "active"    => "categories",
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title'    => "Post by Category : $category->name",
//         "active"    => "categories",
//         'posts'     => $category->posts->load('category', 'author'),
//         // 'category' => $category->name
//     ]);
// });
// ini sudah ada dimodel

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title'  => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts'  => $author->post->load('category', 'author'),
//     ]);
// });
// ini udah ada di model post

//Login
Route::get('/loginsample', [LoginSampleController::class, 'index'])->name('loginsample')->middleware('guest');
Route::post('/loginsample', [LoginSampleController::class, 'authenticate']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin'); // excep adalah kecuali. atau method yang tidak dilkukan

// Route::resource('/master/user', [MasterController::class, 'user'])->middleware('auth');
Route::get('/master/user', [MasterController::class, 'user']);
Route::get('/showUser', [MasterController::class, 'showUser']);
Route::get('/tambahUser', [MasterController::class, 'tambahUser']);
Route::get('/simpanUser', [MasterController::class, 'simpanUser']);
Route::get('/show', [MasterController::class, 'show']);
Route::get('/fetch_data', [MasterController::class, 'fetch_data']);
Route::get('/editUser/{id}', [MasterController::class, 'editUser']);
Route::get('/simpanEditUser/{id}', [MasterController::class, 'simpanEditUser']);
Route::get('/deleteUser/{id}', [MasterController::class, 'deleteUser']);
