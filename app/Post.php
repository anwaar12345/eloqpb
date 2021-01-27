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
       return $this->hasMany(Comment::class,'post_id','id');
    }
    public function getPostDetail($id)
    {
      return $this->with(['author','comments','comments.commentedBy'])
            ->where('posts.id',$id)->get();
    }
   
}
