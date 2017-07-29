@extends("main")
@section("title","Home")
@section("content")
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        @foreach($posts as $post)
          <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>{{ $post->body }}</p>
          <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">View Post</a>
        </div>
        @endforeach
        <div class="text-center">
          {!! $posts->links() !!}
        </div>
    </div>
  </div>
@endsection
