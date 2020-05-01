<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel Image Upload Example - Tutsmake.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 
 <style>
    .container{
    padding: 10%;
    text-align: center;
   } 
 
 </style>
</head>
<body>
 
<div class="container">
    <h2 style="margin-left: -48px;">Laravel Image Upload Example - Tutsmake.com</h2>
    <br>
    <h4>with preview</h4>
    <br>
    @if ($message = Session::get('success'))
 
    <div class="alert alert-success alert-block">
 
        <button type="button" class="close" data-dismiss="alert">×</button>
 
            <strong>{{ $message }}</strong>
 
    </div>
    <br>
    @endif
 
    @if (count($errors) > 0)
 
        <div class="alert alert-danger">
 
            <strong>Opps!</strong> There were something went wrong with your input.
 
            <ul>
 
                @foreach ($errors->all() as $error)
 
                    <li>{{ $error }}</li>
 
                @endforeach
 
            </ul>
 
        </div>
      <br>
    @endif
    <form action="{{ url('save') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      @csrf
    <div class="avatar-upload col-12">
        <div class="avatar-edit">
            <input type='file' id="image" name="image" onchange="readURL(this);" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
            <img id="blah" src="https://www.tutsmake.com/wp-content/uploads/2019/01/no-image-tut.png" class="" width="200" height="150"/>
        </div>
 
    </div>
    <div class="avatar-upload col-6">
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form>
</div>
<script>
  function readURL(input, id) {
    id = id || '#blah';
    if (input.files &amp;&amp; input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
</script> 
</body>
</html>