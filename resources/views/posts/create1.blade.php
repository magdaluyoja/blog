@extends("main")
@section("title","Create New Post")
@section("content")
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        {!! Form::open(['route'=>'posts.store']) !!}
			{{ Form::label("txttitle","Title :") }}
			{{ Form::text("txttitle", null, array('class' => "form-control")) }}
			
			{{ Form::label("txtbody","Body :") }}
			{{ Form::textarea("txtbody", null, array('class' => "form-control")) }}

			{{ Form::submit("Submit", array('class' => "btn btn-success btn-block", "style"=>"margin-top:20px;")) }}
		{!! Form::close() !!}
    </div>
  </div>
@endsection