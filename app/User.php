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
    public function getUserPosts($id)
    {
       return $this->find($id)->posts
       ->map(function($q)
       {
           $data = [];
           $data['id'] = $q->id;
           $data['content'] = $q->content;
           $data['author'] = $q->author->name;
           $data['email'] = $q->author->email;
           return $data;

       });
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'user_id','id')->with('author');
    }
}
