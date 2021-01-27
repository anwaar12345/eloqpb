@extends('layout.layout')
@section('content')
<p>{{ $data[0]['content'] }}</p>
<p>{{ $data[0]['author'] }} </p>
<p>  comments </p>
<br><br><br>
@foreach($data[0]['comments'] as $comment)
{{ $comment['comment'] }}
<br><br><br><br>
<b>{{ $comment['comment_by'] }}</b>
<br><br><br><br>
@endforeach
@endsection