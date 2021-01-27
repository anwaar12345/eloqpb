@extends('layout.layout')
@section('content')
                <div class="m-b-md">
                   <h1>All users</h1>
                </div>

                <div class="links">
                 @if(@count($users))
                 @foreach($users as $user)
                   <ul> 
                   <li><a href="{{url('detail',$user->id)}}">{{ $user->name }}</a></li>
                   </ul>
                 @endforeach
                 @else
                  <h3>No Record found</h3>
                 @endif 
                </div>
           
@endsection