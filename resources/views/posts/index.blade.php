@extends('layouts.main')

@section('title')
	Post
@endsection

@section('content')
	@forelse ($posts as $post)
	<div class="container">
		<div class="card my-2" >
  		<div class="card-body">
  	    <h5 class="card-title">
  	    	<a href="{{route('posts.show',['post' => $post->id]) }}">
  	    		{{$post->title}}  	    		
  	    	</a>  	    		
  	    </h5>
        <p class="card-text">
        	<span class="">Created</span> {{$post->created_at->diffForHumans()}} 
        	<span class="">Updated</span> {{$post->updated_at->diffForHumans()}}
        </p>
        
      <a href="{{route ('posts.edit',['post' => $post->id]) }}" class="btn btn-success">Edit</a>
   	  <a href="{{route ('posts.destroy',['post' => $post->id]) }}" class="btn btn-danger">Hapus</a>
  </div>
</div>
</div>

	@empty
	<h4>No Post Yet!</h4>
	@endforelse

@endsection

