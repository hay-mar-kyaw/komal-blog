<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,BlogController};


Route::get('/',[BlogController::class,'index']);

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);

Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);

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


