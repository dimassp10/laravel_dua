@extends('layouts.main')

@section('title')
	Category
@endsection

@section('content')
	
	<h1 class="mb-5">Post Categories</h1>
	@forelse ($categories as $category)
	<div class="container">
	<div class="card my-2" >
  		<div class="card-body">
  	    <h5 class="card-title">
  	    	<a href="{{route('categories.show',['category' => $category->name]) }}">
  	    		{{$category->name}}  	    		
  	    	</a>  	    		
  	    </h5>
        <p class="card-text">
        	<span class="">Created</span> {{$category->created_at->diffForHumans()}} 
        	<span class="">Updated</span> {{$category->updated_at->diffForHumans()}}
        </p>
  </div>
</div>
</div>

	@empty
	<h4>No Post Yet!</h4>
	@endforelse

@endsection

