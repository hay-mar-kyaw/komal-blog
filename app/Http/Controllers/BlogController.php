<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog,User};

class BlogController extends Controller
{
    public function index() {

            return view('blogs.index',[
                'blogs'=>Blog::latest()
                            ->filter(request(['search','category','username']))
                            ->paginate(6)
                            ->withQueryString(),

            ]);
    }

    public function show (Blog $blog){
        return view('blogs.show',[
            'blog'=>$blog,
            'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
        ]);
    }

    public function subscribeHandler(Blog $blog){

        if(User::find(auth()->id())->isSubscribe($blog)){
            $blog->unSubscribe();
        }else{
            $blog->subscribe();
        }
        return redirect()->back();
    }

}
