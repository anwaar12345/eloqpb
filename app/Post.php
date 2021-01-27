<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }
    public function comments()
    {
       return $this->belongsTo(Comment::class,'post_id','id');
    }
}
