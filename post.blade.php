@extends('layout')

@section('search')
@include('layouts.search_form')
@endsection

@section('content')
<div class="post">
	<div class="post_image" style="background: url('/image/{{$post->image}}') no-repeat center center; background-size: cover;"></div>
	<div class="post_title">{{$post->title}}</div>
	<div class="post_text">{{$post->article}}</div>
</div>
@endsection
