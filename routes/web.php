<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,BlogController,CommentController};


Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);
Route::post('/blogs/{blog:slug}/comments',[CommentController::class,'store']);

Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');
Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');

// Route::get('/categories/{category:slug}',function (Category $category){
//     return view('blogs',[
//         'blogs'=>$category->blogs,
//         'categories'=>Category::all(),
//         'currentCategory'=>$category
//     ]);
// });
// Route::get('/users/{user:username}', function (User $user){
//     return view('blogs',[
//         'blogs'=>$user->blogs,
//         'categories'=>Category::all()
//         // 'blogs'=>$user->blogs->load('category','author'); // lazy loading or eager loading
//     ]);
// });


