<!DOCTYPE html>
<html lang="en">
  @include("partials._head")
  <body> 
    @include("partials._topnav")
    <div class="container">
      @yield("content")
    </div> <!-- end of container -->
    @include("partials._javascripts")
    @include("partials._footer")
  </body>
</html>