@extends('master')
@section('content')
<h2>Show Post {{$post->id}}</h2>
<h4>{{$post->type}}</h4>
<p>{{$post->contents}}</p>
@endsection