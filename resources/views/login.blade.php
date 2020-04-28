<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoreTube | Login</title>

<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="content">

        <div class="loginForm">
            <h1 class="formtitle">Login</h1>
            <form method="POST" action="/login">
                {{csrf_field()}}
                <div class="inputtype">
                    <input class="inputData" type="text" placeholder="Username" required>
                </div>
                <div class="inputtype">
                    <input class="inputData" type="password" placeholder="Password" required>
                </div>
                <h6 class= "signupText"><a href="/signup">Create a new account</a></h6>
                <button type="submit" class="social">Login</button>
                <div class="social loginGoogle">
                    <img src="https://img.icons8.com/color/48/000000/google-logo.png"/>
                    <button type="submit" class="submitBtn lg">Login with google</button>
                </div>
                <div class="social loginFB">
                    <img src="https://img.icons8.com/color/48/000000/facebook.png"/>
                    <button type="submit" class="submitBtn">Login with facebook</button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>