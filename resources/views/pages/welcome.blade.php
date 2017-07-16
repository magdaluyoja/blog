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
        <div class="post">
          <h3>Title</h3>
          <p>Post Content</p>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1">
        Sidebar
    </div>
  </div>
@endsection
