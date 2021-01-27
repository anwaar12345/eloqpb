<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
     $this->user = new User();    
    }

    public function index()
    {
        $users = $this->user->getUsers();  
        return view('welcome',['users' => $users]);
    }

    public function detail($id)
    {  
        $detail = $this->user->getUser($id);

        $posts = $this->user->getUserPosts($id); 

        return view('detail',[
            'detail' => $detail,
            'posts' => $posts
            ]);
    }
}
