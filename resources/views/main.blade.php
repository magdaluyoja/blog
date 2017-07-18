<!DOCTYPE html>
<html lang="en">
  @include("partials._head")
  <body> 
    @include("partials._topnav")
    @include("partials._messages")
    <div class="container">
      @yield("content")
    </div> <!-- end of container -->
    @include("partials._javascripts")
    @include("partials._footer")
  </body>
</html>