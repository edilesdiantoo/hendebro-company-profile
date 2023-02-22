<?php

use App\Models\Hdr;
use App\Models\Blog;
use App\Models\Menu;
use App\Models\SourceCode;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MNGContentController;

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
    $title = "Home";
    $active    = "home";
    $get_menu_landing = Menu::all();
    $getBlog = Blog::all();
    $getSourceCode = DB::table('source_codes')
        ->select('source_codes.*', 'categories.*')
        ->leftJoin('categories', 'source_codes.category_id', 'categories.id')
        ->get();
    // dd($get_menu_landing);
    return view('home', compact('get_menu_landing', 'getBlog', 'getSourceCode', 'active'));
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::get('/foo', function () {
    File::link(
        storage_path('app/public'),
        public_path('storage')
    );
    echo "hahh";
});

Route::controller(MasterController::class)->group(function () {
    //User Master
    Route::get('/master/user', 'user');
    Route::get('/showUser', 'showUser');
    Route::get('/tambahUser', 'tambahUser');
    Route::get('/simpanUser', 'simpanUser');
    Route::get('/fetch_data', 'fetch_data');
    Route::get('/editUser/{id}', 'editUser');
    Route::get('/simpanEditUser/{id}', 'simpanEditUser');
    Route::get('/deleteUser/{id}', 'deleteUser');
    Route::get('/getSearch/{id}', 'getSearch');

    //Category Master
    Route::get('/master/category', 'category');
    Route::get('/showCategory', 'showCategory');
    Route::get('/tambahCategory', 'tambahCategory');
    Route::get('/simpanCategory', 'simpanCategory');
    Route::get('/fetch_category', 'fetch_category');
    Route::get('/editCategory/{id}', 'editCategory');
    Route::get('/simpanEditCategory/{id}', 'simpanEditCategory');
    Route::get('/deleteCategory/{id}', 'deleteCategory');
    Route::get('/getSearchCategory/{id}', 'getSearchCategory');
});

Route::controller(MNGContentController::class)->group(function () {
    //Menu Conten Landing Page
    Route::get('/MngContent/menucontent', 'menucontent');
    Route::get('/showMenuContent', 'showMenuContent');
    Route::get('/tambahMenuContent', 'tambahMenuContent');
    Route::get('/simpanMenuContent', 'simpanMenuContent');
    Route::get('/editMenuContent/{id}', 'editMenuContent');
    Route::get('/simpanEditMenuContent/{id}', 'simpanEditMenuContent');
    Route::get('/deleteMenuConten/{id}', 'deleteMenuConten');
    Route::get('/getSearchMenu/{id}', 'getSearchMenu');

    //Blog
    Route::get('/MngContent/blog', 'blog');
    Route::get('/showBlog', 'showBlog');
    Route::get('/tambahBlog', 'tambahBlog');
    Route::post('/simpanBlog', 'simpanBlog');
    Route::get('/fetch_blog', 'fetch_blog');
    Route::get('/editBlog/{id}', 'editBlog');
    Route::post('/simpanBlogEdit', 'simpanBlogEdit');
    Route::get('/deleteBlog/{id}', 'deleteBlog');
    Route::get('/getSearchMenu/{id}', 'getSearchMenu');

    // Source Code
    Route::get('/MngContent/scode', 'scode');
    Route::get('/showScode', 'showScode');
    Route::get('/tambahScode', 'tambahScode');
    Route::post('/simpanScode', 'simpanScode');
    Route::get('/editScode/{id}', 'editScode');
    Route::post('/simpanScodeEdit', 'simpanScodeEdit');
    Route::get('/deleteScode/{id}', 'deleteScode');
    // Route::get('/fetch_blog', 'fetch_blog');
    // Route::get('/getSearchMenu/{id}', 'getSearchMenu');
});
