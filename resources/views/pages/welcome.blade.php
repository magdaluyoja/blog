@extends("main")
@section("title","Home")
@section("content")
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my blog!</h1>
        <p class="lead">Thank you for visiting...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>
    </div>
  </div><!-- End of Row-->
  <div class="row">
    <div class="col-md-8">
        @foreach($posts as $post)
          <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>{{ $post->body }}</p>
          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">View Post</a>
        </div>
        @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">
        Sidebar
    </div>
  </div>
@endsection
