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
     $this->post = new Post();
    }

    public function index()
    {
        $users = $this->user->getUsers();  
        return view('welcome',['users' => $users]);
    }

    public function detail(Request $request,$id)
    {  

        $posts = $this->user->getUserPosts($request,$id); 

        return view('detail',[
            'post' => $posts
            ]);
    }
    public function postDetail($id)
    {
        $postDetail = $this->post->getPostDetail($id);
        return view('postdetail',['data' => $postDetail]);
    }
}

