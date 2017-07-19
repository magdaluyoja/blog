<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby("id","desc")->paginate(1);
        $paging = $posts->currentPage()."of".$posts->total();
        return view("posts.index")->with("posts",$posts)->with("paging",$paging);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
                "txttitle"=>"required|max:225",
                "txtbody"=>"required|max:225"
            ));
        //store in the database
        $post = new Post;
        $post->title = $request->txttitle;
        $post->body = $request->txtbody;

        $post->save();
        Session::flash("success","The blog was successfully saved.");
        return redirect()->route("posts.show", $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view("posts.show")->with("post",$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view("posts.edit")->with("post",$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $this->validate($request, array(
                "title"=>"required|max:225",
                "body"=>"required|max:225"
            ));
        //store in the database
        $post = Post::find($id);

        $post->title = $request->input("title");
        $post->body = $request->input("body");

        $post->save();

        Session::flash("success","The post was successfully updated.");

        return redirect()->route("posts.show", $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash("success","Post was successfully deleted.");
        return redirect()->route("posts.index");
    }
}
