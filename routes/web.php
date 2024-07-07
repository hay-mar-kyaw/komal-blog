<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\{Blog,Category,User};

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
    return view('blogs',[
        'blogs'=>Blog::latest()->get(),
        'categories'=>Category::all()

    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog){
    return view('blog',[
        'blog'=>$blog,
        'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
    ]);
});

Route::get('/categories/{category:slug}',function (Category $category){
    return view('blogs',[
        'blogs'=>$category->blogs,
        'categories'=>Category::all(),
        'currentCategory'=>$category
    ]);
});
Route::get('/users/{user:username}', function (User $user){
    return view('blogs',[
        'blogs'=>$user->blogs,
        'categories'=>Category::all()
        // 'blogs'=>$user->blogs->load('category','author'); // lazy loading or eager loading
    ]);
});

Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);
