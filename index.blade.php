@extends('layout')

@section('search')
@include('layouts.search_form')
@endsection

@section('content')
<div class="posts_list">
	@foreach($posts as $post)
		<a href="/post/{{$post->id}}" class="posts">
			<div class="posts_image" style="background: url('/image/{{$post->image}}') no-repeat center center; background-size: cover;"></div>
			<div class="posts_title">{{$post->title}}</div>
			<div class="posts_footer">
				<span>Views {{$post->count_views}}</span>
				<span>Views {{$post->date}}</span>
			</div>
		</a>
	@endforeach
</div>
@endsection
