<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $with = ['category', 'author'];
    protected $guarded = [];

    public function scopeFilter($query,$filter){

        $query->when($filter['search']??false, function ($query, $search){
            $query->when(function($query) use($search) {
                $query=$query->where('title','LIKE','%'.$search.'%')
                            ->orwhere('body','LIKE','%'.$search.'%');

            });
        });
        $query->when($filter['category']??false, function ($query, $slug){
                $query->whereHas('category', function ($query) use($slug){
                            $query->where('slug', $slug);
                });

        });
        $query->when($filter['username']??false, function( $query, $username){
                $query->whereHas('author', function ($query) use($username){
                            $query->where('username',$username);
    });
        });

    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
