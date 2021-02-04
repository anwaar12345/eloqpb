@extends('layout.layout')
@section('content')
@if(empty($data))
<h1> No Comments </h1>
@else
<p>{{ $data['content'] }}</p>
<p>{{ $data['author']['name'] }} </p>
<p>  comments </p>
<br><br><br>
@foreach($data['comments'] as $comment)
{{ $comment['comment'] }}
<br><br><br><br>
<b> {{ $comment->commentedBy->name }} </b>
<br><br><br><br>
@endforeach
@endif
@endsection