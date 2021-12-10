@extends('layouts.main')

@section('title')
	Update Post
@endsection

@section('content')
	<div class="container">
	<form action="{{ route('posts.update',['post' => $post->id ]) }}" method="POST" enctype="multipart/form-data">

		@csrf
		@method('PUT ')
		@include('posts._form')
	</form>
	</div>
@endsection