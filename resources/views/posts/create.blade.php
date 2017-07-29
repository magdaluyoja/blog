@extends("main")
@section("title","Create New Post")
@section("content")
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Create New Post</h1>
        {!! Form::open(['route'=>'posts.store', 'data-parsley-validate'=>'']) !!}
			{{ Form::label("txttitle","Title :") }}
			{{ Form::text("txttitle", null, array('class' => "form-control", "required"=>"","maxlength=10")) }}
			
			{{ Form::label("slug","Slug :") }}
			{{ Form::text("slug", null, array('class' => "form-control", "required"=>"","minlength=5","maxlength=255")) }}


			{{ Form::label("txtbody","Body :") }}
			{{ Form::textarea("txtbody", null, array('class' => "form-control", "required"=>"")) }}

			{{ Form::submit("Submit", array('class' => "btn btn-success btn-block", "style"=>"margin-top:20px;")) }}
		{!! Form::close() !!}
    </div>
  </div>
@endsection