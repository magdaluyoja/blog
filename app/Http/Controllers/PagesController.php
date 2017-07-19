<?php

namespace App\Http\Controllers;
use App\Post;
class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy("created_at","desc")->limit(2)->get();
    	return view("pages.welcome")->with("posts",$posts);
    }
    public function getAbout(){
    	$name = "Jay-R A. Magdaluyo";
    	$email = "magdaluyoja@gmail.com";
    	$data = [];
    	$data["age"] = 26;
    	$data["address"] = "Aklan";
    	return view("pages.about")->with("fullname",$name)->withEmail($email)->withData($data);;
    }
    public function getContact(){
    	return view("pages.contact");
    }
}
