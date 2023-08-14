<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap"
      rel="stylesheet">
  
      <!-- Css Styles -->
      <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
      <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
      <link rel="stylesheet" href="css/nice-select.css" type="text/css">
      <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
      <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
      <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="style2.css">
    
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body style="



background: linear-gradient(rgba(38, 51, 72, 0.632), rgba(38, 51, 72, 0.619)), url(assets/img/hero.jpeg);
 
background-size: cover;
background-position: center;
position: relative;

color: rgba(255, 255, 255, 0.8); ">
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="assets/img/hero.jpeg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        {{-- <<img class="backImg" src="assets/img/pexels-photo-1683989 - Copy.jpg" alt=""> --}}
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title ">Login</div>
            <form method="POST" action="{{ route('login') }}">

            @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input  placeholder="Enter your email" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input placeholder="Enter your password" id="password" type="password" name="password" required>
              </div>
              {{-- <div class="text"><a href="#">Forgot password?</a></div> --}}
             
              <div class="button input-box">
                <input type="submit" value="login">
              </div>
              
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          <form method="POST" action="{{ route('register') }}">

            @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input  placeholder="Enter your name" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input  placeholder="Enter your email" id="email" type="email" name="email" value="{{ old('email') }}" required >
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input  placeholder="Enter your password" id="password" type="password" name="password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input  placeholder="Confirm your password" id="password_confirmation" type="password" name="password_confirmation" required>
              </div>
            
              <div class="button input-box">
                <input type="submit" value="register">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>