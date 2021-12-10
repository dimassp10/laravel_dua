<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Storage;
use App\Http\Requests\PegawaiRequest;


class PostController extends Controller
{
   
    private $path = 'thumbnails';

    public function index()
    {
        $posts = Post::all();
        return view('posts.index',['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $filename = $request->file('thumbnail')
            ->storeAs( 
                $this->path,
                time() . "." . $request->file('thumbnail')->getClientOriginalExtension(),
                'public'
            );

        Post::create(
            [
            
            'title' => $request->title,
            'category_id' => $request->category_id,
            'thumbnail' =>$filename,
            'content' => $request->content
            
             ]);

        return redirect()->route('posts.index');
    }


    
    public function show(Post $post)
    {
        return view('posts.show',['post' => $post]);
    }

    
    public function edit(Post $post)
    {
        return view('posts.edit',['post' => $post]);   
    }


    public function update(Request $request, Post $post)
    {
        $filename = $post->thumbnail;
        if($request->hasFile('thumbnail')){
            Storage::delete('public/' . $post->thumbnail);
            $filename=$request->file('thumbnail')
            ->storeAs( 
                $this->path,
                time() . "." . $request->file('thumbnail')->getClientOriginalExtension(),
                'public'
            );

        }
       $post->Update([
        
            'title' =>$request->title,
            'category_id' =>$request->category_id,
            'thumbnail' =>$filename,
            'content' =>$request->content
    ]);
            return redirect()->route('posts.index');

    }

   
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
       
    }
}
