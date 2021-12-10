@extends('layouts.main')



@section('title')
	Create Post
@endsection

@section('content')
	<div class="container">
	<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"> 

		@csrf
		@include('posts._form')
	</form>
	</div>
@endsection