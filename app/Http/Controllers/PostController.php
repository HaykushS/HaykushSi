<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('pages.post',compact("posts"));


    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',
        ]);
        
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->category_id = $request->category_id;
        $post->save();
 
        $post = Post::create($request->all());
        return redirect()->route("post.index")->with("success","");
    }
    
    public function show($postId){
        $post = Post::find($postId);
        return view("pages.post",compact("post"));
    }
    
}
