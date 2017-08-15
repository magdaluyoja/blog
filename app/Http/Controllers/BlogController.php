<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
	public function getIndex(){
    	$posts = Post::paginate(1);
    	return view('blog.index')->with('posts',$posts);
    }
    public function getSingle($id){
    	$post = Post::where('id','=',$id)->first();
    	return view('blog.single')->with('post',$post);
    }
}
