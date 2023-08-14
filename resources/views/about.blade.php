@extends('layouts.app')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/hero.jpeg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

   <!-- ======= About Us Section ======= -->
   <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="assets/img/about.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=1mre1qi-rOI" class="glightbox play-btn"></a>
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            Welcome to Bahaa Wedding Agency, your premier destination for exquisite wedding planning services. We turn dreams into reality, crafting unforgettable moments. From consultation to grand finale, we handle every detail, so you can relax and enjoy. Let us create a magical day that lasts a lifetime.            </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-check-circle"></i>
              <div>
                <h5>Expert Guidance</h5>
                <p>Our experienced team provides expert guidance throughout the wedding planning process. We offer personalized advice and support to ensure your special day exceeds all expectations</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt-fill"></i>
              <div>
                <h5>Destination Weddings</h5>
                <p>Dreaming of a destination wedding? We specialize in creating unforgettable experiences in stunning locations around the world. From beachside ceremonies to enchanting vineyard receptions, we'll help you bring your dream destination wedding to life</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-people-fill"></i>
              <div>
                <h5>Vendor Partnerships</h5>
                <p>With our extensive network of trusted vendors and industry partnerships, we connect you with top-notch professionals who share our commitment to excellence. You can be confident that you'll receive the highest quality services and products for your wedding day</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->








 
   

  </main><!-- End #main -->

  @endsection