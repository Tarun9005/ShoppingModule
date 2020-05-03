<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StoreTube | Store</title>
</head>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">StoreTube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link px-4 " href="/">Home </a>
        <a class="nav-item nav-link active px-4" href="/store">Store<span class="sr-only">(current)</span></a>
        @if(Auth::check())
        <a class="nav-item nav-link px-4" href="/cart">My Cart</a>
        @endif
        @if(Auth::check())
        <a class="nav-item nav-link px-4" href="#">Hi {{Auth::User()->name}}</a>
        <a class="nav-item nav-link px-4" href="/logout">Logout</a>
        @else
        <a class="nav-item nav-link px-4" href="/login">Login</a>
        @endif
      </div>
    </div>
  </nav>

  @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
  <!-- Navbar Ends -->
  <div class="cartHead">
    STORE
    <hr>
  </div>
  <div class="products">





    @if(Auth::check())
   
    @foreach($prod as $prods)
    <form method="POST" action="/store/{{$prods->id}}/{{Auth::User()->id}}">
      {{csrf_field()}}
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('public/image/' . $prods->image)}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$prods->description}}</h5>
          <h5 class="card-title">$<span class="price">{{$prods->price}}</span></h5>
          <button data-toggle="modal" data-target="yModal" class="shopBtn addToCart" type="submit">Add to Cart</button>
        </div>
      </div>
    </form>
    @endforeach
   


    @else

    @foreach($prod as $prods)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{asset('public/image/' . $prods->image)}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$prods->description}}</h5>
        <h5 class="card-title">$<span class="price">{{$prods->price}}</span></h5>
        <a href="#" data-toggle="modal" data-target="#myModal" class="shopBtn addToCart">Add to Cart</a>
      </div>
    </div>
    @endforeach

    @endif



  </div>

  <div class="products">

  </div>
  <div class="cartBottom">
    More products coming soon...

  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Success</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>You must login first!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="shopBtn" style="outline: none; border: none;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Footer -->
  <footer class="jumbotron">
    All Rights Reserved 
    &copy; Storetube Inc <br>
    <a href="mailto:nsnaman36@gmail.com" class="btn btn-info">Get in Touch</a>
  </footer>

  <script src="./src/js/sample.js"></script>
</body>
</html>