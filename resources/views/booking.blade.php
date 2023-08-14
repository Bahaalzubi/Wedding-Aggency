


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bahaa Wedding Agency</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets3/css/bd-wizard.css">
 
</head>

<body>
  <?php
  $userName = session('user_name');
  $userID = session('user_id');
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img style="width: 200px; height: 50px;" src="assets/img/logo.png" alt=""> 
      
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="\" class="active">Home</a></li>
          <li><a href="about">About</a></li>
          @if (auth()->check())
          <li><a href="/booking">Booking</a></li>
      @endif
          
          {{-- <li><a href="packages">Pricing</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a href="contact">Contact</a></li>
          @if (auth()->check())
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            {{-- <button type="submit" class="primary-btn">Log Out</button> --}}
            <li><button  type="submit" class="get-a-quote" >Log out</button></li>
          </form>
          @else
          <li><a class="get-a-quote" href="/login-register">Log in</a></li>
          <li><a class="get-a-quote" href="/login-register">Sign Up</a></li>
          @endif
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->





    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/hero.jpeg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Booking</h2>
              {{-- <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p> --}}
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Booking</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->



  {{-- booking --}}
  <main class="d-flex align-items-center">
    <div class="container">
      <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <div id="wizard">
          <h3>Step 1 Title</h3>
          <section class="section1">
            <h5 class="bd-wizard-se-radio-label">
              <span class="label-icon">
                <img src="assets3/images/icon_branding.svg" alt="branding" class="label-icon-default">
                Step 1
              </span>
            </h5>
            <h2 class="section-heading">Select Venue</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <div class="purpose-radios-wrapper">
              @foreach ($venues as $venue)
              <div class="purpose-radio">
                <input type="radio" name="venue" id="venue{{ $venue->id }}" class="purpose-radio-input" value="{{ $venue->id }}">
                <label for="venue{{ $venue->id }}" class="purpose-radio-label">
                  <span class="label-icon">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $venue->image) }}" alt="branding" class="label-icon-default">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $venue->image) }}" alt="branding" class="label-icon-active">
                  </span>
                  <span class="label-text">{{ $venue->name }}</span>
                  <span class="label-text">{{ $venue->price }}</span>
                </label>
              </div>
              @endforeach
            </div>
          </section>
          
          <h3>Step 2 Title</h3>
          <section>
            <h5 class="bd-wizard-se-radio-label">
              <span class="label-icon">
                <img src="assets3/images/icon_branding.svg" alt="branding" class="label-icon-default">
                Step 2
              </span>
            </h5>
            <h2 class="section-heading">Select Theme</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <div class="purpose-radios-wrapper">
              @foreach ($themes as $theme)
              <div class="purpose-radio">
                <input type="radio" name="theme" id="theme{{ $theme->id }}" class="purpose-radio-input" value="{{ $theme->id }}">
                <label for="theme{{ $theme->id }}" class="purpose-radio-label">
                  <span class="label-icon">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $theme->image) }}" alt="branding" class="label-icon-default">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $theme->image) }}" alt="branding" class="label-icon-active">
                  </span>
                  <span class="label-text">{{ $theme->name }}</span>
                  <span class="label-text">{{ $theme->price }}</span>
                </label>
              </div>
              @endforeach
            </div>
          </section>
          
          <h3>Step 3 Title</h3>
          <section>
            <h5 class="bd-wizard-se-radio-label">
              <span class="label-icon">
                <img src="assets3/images/icon_branding.svg" alt="branding" class="label-icon-default">
                Step 3
              </span>
            </h5>
            <h2 class="section-heading">Select Wedding Cake</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <div class="purpose-radios-wrapper">
              @foreach ($cakes as $cake)
              <div class="purpose-radio">
                <input type="radio" name="cake" id="cake{{ $cake->id }}" class="purpose-radio-input" value="{{ $cake->id }}">
                <label for="cake{{ $cake->id }}" class="purpose-radio-label">
                  <span class="label-icon">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $cake->image) }}" alt="branding" class="label-icon-default">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $cake->image) }}" alt="branding" class="label-icon-active">
                  </span>
                  <span class="label-text">{{ $cake->name }}</span>
                  <span class="label-text">{{ $cake->price }}</span>
                </label>
              </div>
              @endforeach
            </div>
          </section>
          
          <h3>Step 4 Title</h3>
          <section>
            <h5 class="bd-wizard-se-radio-label">
              <span class="label-icon">
                <img src="assets3/images/icon_branding.svg" alt="branding" class="label-icon-default">
                Step 4
              </span>
            </h5>
            <h2 class="section-heading">Select DJ & Zaffeh</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <div class="purpose-radios-wrapper">
              @foreach ($djs as $dj)
              <div class="purpose-radio">
                <input type="radio" name="dj" id="dj{{ $dj->id }}" class="purpose-radio-input" value="{{ $dj->id }}">
                <label for="dj{{ $dj->id }}" class="purpose-radio-label">
                  <span class="label-icon">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $dj->image) }}" alt="branding" class="label-icon-default">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $dj->image) }}" class="label-icon-active">
                  </span>
                  <span class="label-text">{{ $dj->name }}</span>
                  <span class="label-text">{{ $dj->price }}</span>
                </label>
              </div>
              @endforeach
            </div>
          </section>
          
          <h3>Step 5 Title</h3>
          <section>
            <h5 class="bd-wizard-se-radio-label">
              <span class="label-icon">
                <img src="assets3/images/icon_branding.svg" alt="branding" class="label-icon-default">
                Step 5
              </span>
            </h5>
            <h2 class="section-heading">Select Caterings</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <div class="purpose-radios-wrapper">
              @foreach ($caterings as $catering)
              <div class="purpose-radio">
                <input type="radio" name="catering" id="catering{{ $catering->id }}" class="purpose-radio-input" value="{{ $catering->id }}">
                <label for="catering{{ $catering->id }}" class="purpose-radio-label">
                  <span class="label-icon">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $catering->image) }}" alt="branding" class="label-icon-default">
                    <img style="width: 196px; height: 100px;" src="{{ asset('features/images/' . $catering->image) }}" alt="branding" class="label-icon-active">
                  </span>
                  <span class="label-text">{{ $catering->name }}</span>
                  <span class="label-text">{{ $catering->price }}</span>
                </label>
              </div>
              @endforeach
            </div>
          </section>
          
          <h3>Step 6 Title</h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 6</h5>
            <h2 class="section-heading">Enter your Account Details</h2>
            <div class="form-group">
              <label for="firstName" class="sr-only">Bride Name</label>
              <input type="text" name="bride_name" id="firstName" class="form-control" placeholder="Bride Name">
            </div>
            <div class="form-group">
              <label for="lastName" class="sr-only">Groom Name</label>
              <input type="text" name="groom_name" id="lastName" class="form-control" placeholder="Groom Name">
            </div>
            <div class="form-group">
              <label for="weddingDate" class="sr-only">Wedding Date</label>
              <input type="date" name="wedding_date" id="weddingDate" class="form-control" placeholder="Wedding Date">
            </div>
            <div class="form-group">
              <label for="preferredTime" class="sr-only">Preferred Time</label>
              <input type="time" name="time" id="preferredTime" class="form-control" placeholder="Preferred Time">
            </div>
            <div class="form-group">
              <label for="numberOfGuests" class="sr-only">Number of Guests</label>
              <input type="number" name="number_of_guest" id="numberOfGuests" class="form-control" placeholder="Number of Guests">
            </div>
          </section>
          
          <h3>Step 7 Title</h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 7</h5>
            <h2 class="section-heading mb-5">Review your Details and Submit</h2>
            <h6 class="font-weight-bold">Selected Venue:</h6>
            <p class="mb-4" id="selectedVenue"></p>
            <h6 class="font-weight-bold">Selected Theme:</h6>
            <p class="mb-4" id="selectedTheme"></p>
            <h6 class="font-weight-bold">Selected Wedding Cake:</h6>
            <p class="mb-4" id="selectedCake"></p>
            <h6 class="font-weight-bold">Selected DJ & Zaffeh:</h6>
            <p class="mb-4" id="selectedDJ"></p>
            <h6 class="font-weight-bold">Selected Catering:</h6>
            <p class="mb-4" id="selectedCatering"></p>
            <h6 class="font-weight-bold">Account Details:</h6>
            <p class="mb-4">
              Bride Name: <span id="enteredBrideName"></span><br>
              Groom Name: <span id="enteredGroomName"></span><br>
              Wedding Date: <span id="enteredWeddingDate"></span><br>
              Preferred Time: <span id="enteredPreferredTime"></span><br>
              Number of Guests: <span id="enteredNumberOfGuests"></span><br>
            </p>
            <button style=" display: inline-block;
            border-radius: 6px;
            background-color: #D0218E;
            padding: 16px 30px;
            color: #fff;
            font-style: 15px;
            font-weight: bold; " type="submit" class="btn btn-primary">Save</button>
          </section>
        </div>
      </form>
      
      <script>
        // JavaScript code for capturing and displaying form inputs
        const form = document.querySelector('form');
        const selectedVenue = document.getElementById('selectedVenue');
        const selectedTheme = document.getElementById('selectedTheme');
        const selectedCake = document.getElementById('selectedCake');
        const selectedDJ = document.getElementById('selectedDJ');
        const selectedCatering = document.getElementById('selectedCatering');
        const enteredBrideName = document.getElementById('enteredBrideName');
        const enteredGroomName = document.getElementById('enteredGroomName');
        const enteredWeddingDate = document.getElementById('enteredWeddingDate');
        const enteredPreferredTime = document.getElementById('enteredPreferredTime');
        const enteredNumberOfGuests = document.getElementById('enteredNumberOfGuests');
        
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          
          // Get the selected values from each step
          const selectedVenueValue = document.querySelector('input[name="venue"]:checked').value;
          const selectedThemeValue = document.querySelector('input[name="theme"]:checked').value;
          const selectedCakeValue = document.querySelector('input[name="cake"]:checked').value;
          const selectedDJValue = document.querySelector('input[name="dj"]:checked').value;
          const selectedCateringValue = document.querySelector('input[name="catering"]:checked').value;
          
          // Get the entered account details
          const brideName = document.getElementById('firstName').value;
          const groomName = document.getElementById('lastName').value;
          const weddingDate = document.getElementById('weddingDate').value;
          const preferredTime = document.getElementById('preferredTime').value;
          const numberOfGuests = document.getElementById('numberOfGuests').value;
          
          // Display the selected values and entered details
          selectedVenue.textContent = selectedVenueValue;
          selectedTheme.textContent = selectedThemeValue;
          selectedCake.textContent = selectedCakeValue;
          selectedDJ.textContent = selectedDJValue;
          selectedCatering.textContent = selectedCateringValue;
          enteredBrideName.textContent = brideName;
          enteredGroomName.textContent = groomName;
          enteredWeddingDate.textContent = weddingDate;
          enteredPreferredTime.textContent = preferredTime;
          enteredNumberOfGuests.textContent = numberOfGuests;
          
          // Submit the form
          form.submit();
        });
      </script>
      
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="assets3/js/jquery.steps.min.js"></script>
  <script src="assets3/js/bd-wizard.js"></script>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Bahaa Wedding Agency</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        {{-- <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div> --}}

        {{-- <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div> --}}

        {{-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div> --}}

      </div>
    </div>

  

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
{{-- form --}}
<script>
var next_click=document.querySelectorAll(".next_button");
var main_form=document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber=0;

next_click.forEach(function(next_click_form){
    next_click_form.addEventListener('click',function(){
        if(!validateform()){
            return false
        }
       formnumber++;
       updateform();
       progress_forward();
       contentchange();
    });
}); 

var back_click=document.querySelectorAll(".back_button");
back_click.forEach(function(back_click_form){
    back_click_form.addEventListener('click',function(){
       formnumber--;
       updateform();
       progress_backward();
       contentchange();
    });
});

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");
 

var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
    submit_click_form.addEventListener('click',function(){
       shownname.innerHTML= username.value;
       formnumber++;
       updateform(); 
    });
});

var heart=document.querySelector(".fa-heart");
heart.addEventListener('click',function(){
   heart.classList.toggle('heart');
});


var share=document.querySelector(".fa-share-alt");
share.addEventListener('click',function(){
   share.classList.toggle('share');
});

 

function updateform(){
    main_form.forEach(function(mainform_number){
        mainform_number.classList.remove('active');
    })
    main_form[formnumber].classList.add('active');
} 
 
function progress_forward(){
    // step_list.forEach(list => {
        
    //     list.classList.remove('active');
         
    // }); 
    
     
    num.innerHTML = formnumber+1;
    step_list[formnumber].classList.add('active');
}  

function progress_backward(){
    var form_num = formnumber+1;
    step_list[form_num].classList.remove('active');
    num.innerHTML = form_num;
} 
 
var step_num_content=document.querySelectorAll(".step-number-content");

 function contentchange(){
     step_num_content.forEach(function(content){
        content.classList.remove('active'); 
        content.classList.add('d-none');
     }); 
     step_num_content[formnumber].classList.add('active');
 } 
 
 
function validateform(){
    validate=true;
    var validate_inputs=document.querySelectorAll(".main.active input");
    validate_inputs.forEach(function(vaildate_input){
        vaildate_input.classList.remove('warning');
        if(vaildate_input.hasAttribute('require')){
            if(vaildate_input.value.length==0){
                validate=false;
                vaildate_input.classList.add('warning');
            }
        }
    });
    return validate;
    
}

</script>
</body>

</html>