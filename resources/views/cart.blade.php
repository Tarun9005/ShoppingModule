<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreTube | My Cart</title>

    <!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="./src/css/login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body onload="totalCalc()">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">StoreTube</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link px-4 " href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link px-4" href="/store">Store</a>
                <a class="nav-item nav-link px-4 active" href="/cart">My Cart</a>
                @if(Auth::check())
                <a class="nav-item nav-link px-4" href="/logout">Logout</a>
                @endif
              </div>
            </div>
          </nav>
          <!-- Navbar Ends -->

          <!-- Cart content -->
          
         
          <div class="row" style="margin-top: 30px;">
              
              <div class="col-md-8 col-sm-8 col-lg-8">
                    <div class="cartHead">
                        Your cart contains...
                        <hr>
                    </div>
                  <!-- Sample product -->
                  <div class="items">
                 <!-- Insertion through JS -->
                </div>
                
            </div>
                  
              <div class="col-md-4 col-sm-4 col-lg-4" style="background: white;">
                     <!-- Checkout Section -->
                     <div class="cartHead">
                        TOTAL
                        <hr>
                    </div>
                    <div class="subTotal">
                        <h4>Sub-total</h4>
                        <h4>$<span class="subtotalamount amount">0</span></h4>
                    </div>
                    <hr>
                    <div class="delivery">
                        <h4>Delivery</h4>
                        <h4>$<span class="deliveryamount amount">2</span></h4>
                    </div>
                    <hr>
                    <div class="total">
                        <h4>Total</h4>
                        <h4>$<span class="totalamount amount">2</span></h4>
                    </div>
                    <div class="checkoutBtn">
                        <button type="submit" data-toggle="modal" data-target="#myModal" class="social">Proceed to pay</button>
                    </div>
                    <div class="checkoutBtn">
                      <button type="submit" class="social emptyCart">Empty Cart</button>
                  </div>
                </div>
              

          </div>

    <!-- Modal box -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Success</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  
                </div>
                <div class="modal-body">
                  <p>Payment was made. Your package will be delivered as soon as possible.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="shopBtn" style="outline: none; border: none;" data-dismiss="modal">Close</button>
                </div>
              </div>
              
            </div>
          </div>


    <script src="./src/js/cart.js"></script>
</body>
</html>