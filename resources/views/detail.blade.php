@extends('layout.layout')
@section('content')
                <div class="m-b-md">
                   <h1>User Detail</h1>
                </div>
                <div>
            <form action="">
            <input placeholder="Search Posts" type="text" name="search"><input type="submit" value="click">
            </form>
            </div>
                <div class="links">
                 @if(@count($post))
                   <ul style="list-style-type: none"> 
                   <li style="text-decoration: none;">Name: {{ $post['name'] }}</a></li>
                   <li style="text-decoration: none;">Email: {{ $post['email'] }}</a></li>                    
                </ul>
                <div class="m-b-md">
                   <h1>Posts</h1>
                   @if(count($post['content']))
                   @foreach($post['content'] as $post)
                       <a href="{{url('post-detail',$post['id'])}}" style="text-decoration: none;"><p>{{ $post['content'] }}</p></a>
                   <p>Author :</p>
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