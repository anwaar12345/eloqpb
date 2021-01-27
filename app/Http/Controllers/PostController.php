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

    public function detail($id)
    {  
        $detail = $this->user->getUser($id);

        $posts = $this->user->getUserPosts($id); 

        return view('detail',[
            'detail' => $detail,
            'posts' => $posts
            ]);
    }
    public function postDetail($id)
    {
        $postDetail = $this->post->getPostDetail($id);
        $postDetail = $postDetail->map(function($q){
            $data = [];
            $data['id'] = $q->id;
            $data['content'] = $q->content;
            $data['author'] = $q->author->name;
            $data['comments'] = $q->comments->map(function($i){
                $ndata = [];
                $ndata['comment'] = $i->comment;
                $ndata['comment_by'] = $i->commentedBy->name;
                return $ndata;
            });
            return $data; 
        });  
        return response()->json(['data' => $postDetail]);
        return view('postdetail');
    }
}

