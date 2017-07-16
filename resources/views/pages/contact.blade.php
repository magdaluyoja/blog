@extends("main")
@section("title","Contact")
@section("content")
  <div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <form>
            <div class="form-group">
                <label for="txtemail">Email:</label>
                <input type="text" id="txtemail" name="txtemail" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtsubject">Subjet:</label>
                <input type="text" id="txtsubject" name="txtsubject" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtmessage">Message:</label>
                <textarea type="text" id="txtmessage" name="txtmessage" class="form-control" placeholder="Type your message here..."></textarea>
            </div>
            <input type="Subjet" value="Submit Message" class="btn btn-success">
        </form>
    </div>
  </div>
@endsection