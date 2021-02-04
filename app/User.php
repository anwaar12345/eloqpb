<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Post;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $with = ['posts'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUsers()
    {
       return $this->all();
    }
    public function getUser($id)
    {
       return $this->findOrFail($id);
    }
    public function getUserPosts($request,$id)
    {
       
       $posts = $this->where('id',$id);
       if(isset($request->search)){
        $posts = $posts->with(['posts' => function($q) use($request) {
            $q->where('content','LIKE','%'.$request->search.'%');
        }]);    
        }else{
            $posts = $posts->with('posts');
        }
       $posts = $posts->first();
       $post = [];
       $post['name'] = $posts->name;
       $post['email'] = $posts->email;
       $post['content'] = $posts->posts->map(function($q){
           $innerData = [];
           $innerData['id'] = $q->id;
           $innerData['content'] = $q->content;
           return $innerData;
       });
    
       return $post;
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'user_id','id');
    }
}
