@extends("main")
@section("title","Show Post")
@section("content")
  <div class="row">
    <div class="col-md-8">
    	<h1>{{ $post->title }}</h1>
    	<p class="lead">{{ $post->body }}</p>
    </div>
    <div class="col-md-4">
    	<div class="well">
    		<dl class="dl-horizontal">
    			<dt>Created at:</dt>
    			<dd>{{ date("F d, Y h:m:s A", strtotime($post->created_at)) }}</dd>
    		</dl>
    		<dl class="dl-horizontal">
    			<dt>Updated at: </dt>
    			<dd>{{ date("F d, Y h:m:s A", strtotime($post->updated_at)) }}</dd>
    		</dl>
    		<div class="row">
    			<div class="col-sm-6">
    				{!! Html::linkRoute("posts.edit","Edit",array($post->id), array("class"=>"btn btn-primary btn-block")) !!}
    			</div>
    			<div class="col-sm-6">
                {!! Form::open(["route" => ["posts.destroy", $post->id], "method"=>"DELETE"]) !!}
                        {{ Form::submit("Delete",["class"=>"btn btn-danger btn-block"]) }}
                {!! Form::close() !!}
    			</div>
    		</div>
            <div class="row">
                <div class="col-sm-12">
                    {!! Html::linkRoute("posts.index","<< See All Posts",[], array("class"=>"btn btn-primary btn-block form-spacing-top")) !!}
                </div>
            </div>
    	</div>
    </div>
    <a href="{{ route("posts.index") }}">View all posts</a>
  </div>
@endsection