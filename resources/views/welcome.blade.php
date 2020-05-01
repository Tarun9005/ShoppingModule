<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StoreTube</title>

  <!-- Stylesheets -->

  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">StoreTube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active px-4 " href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link px-4" href="/store">Store</a>
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
  <!-- Navbar Ends -->

  <!-- Focus content -->
  <div class="jumbotron">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center align-items-center">
        <span class="jumboText">New Amazing Stuff is here</span>
        <span class="jumboSmall">Shop today and get <span class="highlight">20% discount</span></span> 
        <a href="./store.html" class="shopBtn">SHOP NOW</a></div>
        <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-around">
          <img src="{{ asset('img/general/model.png')}}" class="img-fluid model" alt="">
          <img src="{{asset('img/general/denimj.png')}}" class="img-fluid denim" alt="">
        </div>
        <div>
        {{-- @foreach ($image as $photos)
       <img src="{{ asset('public/image/' . $photos->image) }}" />
     
     
        @endforeach
      </div> --}}
      {{--   <img src="{{asset('img/general/denimj.png')}}" class="img-fluid denim" alt="">
        <img src="{{ asset('img/' . $photo->image) }}" />
 --}}
      </div>
    </div>
    <!-- Focus content ends -->

    <!-- Features -->
    <div class="row">
      <!-- <div class="col-lg-1 col-md-1 col-sm-1"></div> -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="info">
          <i class="fa fa-truck" style="font-size: 36px;"></i>
          <div class="innerContent">
            <h5>NEXT DAY SHIPING</h5>
            <h6>We deliver door to door within a day or two. We have fastest delivey in the world.</h6>
          </div>
        </div> 
      </div>
      <!-- <div class="col-lg-1 col-md-1 col-sm-1"></div> -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="info">
          <i class="fa fa-recycle" style="font-size: 36px;"></i>
          <div class="innerContent">
            <h5>20 DAY FREE RETURN</h5>
            <h6>No problem if you did not like the product , you can return it for free within 20 days.</h6>
          </div>
        </div> 
      </div>
      <!-- <div class="col-lg-1 col-md-1 col-sm-1"></div> -->

      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="info">
          <i class="fa fa-truck" style="font-size: 36px;"></i>
          <div class="innerContent">
            <h5>SECURE CHECKOUT</h5>
            <h6>No problem if you did not like the product , you can return it for free within 20 days.</h6>
          </div>
        </div> 
      </div>
      <!-- <div class="col-lg-2 col-md-2 col-sm-2"></div> -->

    </div>
    <!-- Features end -->

    <!-- Second jumbotron with focussed content -->
    <div class="jumbotron">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center align-items-center">
          <span class="jumboText">This season</span>
          <span class="jumboSmall">Get ready to change.</span> 
          <a href="./store.html" class="shopBtn">SHOP NOW</a></div>
          <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-around">
            <img src="{{asset('img/general/season.png')}}" class="img-fluid season" alt="">
          </div>
        </div>
      </div>
      <!-- Ends -->

      <!-- Teaser section -->
      <div class="teaser">
        <span class="teaserText">New Arrivals</span>
        <span class="teaserSmall">MENS JACKET</span> 
      </div> 

      <div class="teaserProd">
        <!-- Dynamic insertion of sample products through sample.js -->
      </div>
      <!-- Ends -->
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
            <p>Product was added to cart!</p>
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


    <script src="{{ asset('js/sample.js') }}"></script>
    <script src="{{ asset('js/storage.js') }}"></script>

  </body>
  </html>











