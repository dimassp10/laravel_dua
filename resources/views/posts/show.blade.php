@extends ('layouts.main')

@section('title','Show post')


@section('content')
	<div class="container">

	<h2>{{$post->title}}</h2>
	<p>Post Category : <a href="/categories/{{$post->category_id}}">{{$post->category_id}}</a></p>
	<img class="img-fluid img-thumbnail" src="{{asset ('storage/'.$post->thumbnail)}}">
	<br/>
	{{$post->content}}
	</div>
@endsection