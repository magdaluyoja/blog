<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex(){
    	return view("pages.welcome");
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
