<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Blog $blog){

        request()->validate([
            'body'=>'required|min:10'
        ]);

        //comment store
        $blog->comments()->create([
            'body'=>request('body'),
            'user_id'=>1
        ]);

        $subscribers=$blog->subscribers->filter(fn ($subscriber)=> $subscriber->id != auth()->user()->id);

        foreach($subscribers as $subscriber )
        {
            Mail::to($subscriber->email)->queue(new SubscriberMail($blog));
        }



        return redirect('/blogs/'.$blog->slug);
    }
}
