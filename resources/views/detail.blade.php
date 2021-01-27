@extends('layout.layout')
@section('content')
                <div class="m-b-md">
                   <h1>User Detail</h1>
                </div>

                <div class="links">
                 @if(@count($detail))
                   <ul style="list-style-type: none"> 
                   <li style="text-decoration: none;">Name: {{ $detail->name }}</a></li>
                   <li style="text-decoration: none;">Email: {{ $detail->email }}</a></li>                    
                </ul>
                <div class="m-b-md">
                   <h1>Posts</h1>
                   @if(count($posts))
                   
                   @foreach($posts as $post)
                       <a href="{{url($post['id'])}}" style="text-decoration: none;"><p>{{ $post['content'] }}</p></a>
                   <p>Author : {{ $post['author'] }}</p>
                   @endforeach
                   @else
                   <p>No Posts for You !!!</p>
                   @endif
                </div>
                 @else
                  <h3>No Record found</h3>
                 @endif 
                </div>
@endsection