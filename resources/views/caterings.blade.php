@extends('layouts.app')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>catering</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>catering</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
    



 <!-- ======= Wedding Services Section ======= -->
 <section id="service" class="services pt-0">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <span>catering</span>
      <h2>catering</h2>
    </div>

    <div class="row gy-4">



      @foreach($caterings as $catering)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <div class="card-img">
            <img src="{{ asset('features/images/' . $catering->image) }}" class="img-fluid">
            
          </div>
          <h3><a href="/catering" class="stretched-link">{{ $catering->name }}</a></h3>
          <p>{{ $catering->details }}</p>
        </div>
      </div><!-- End Card Item -->
      @endforeach
  
    

    

     

    

    </div>

  </div>
</section><!-- End Wedding Services Section -->
    <section class="sample-page">
      <div class="container" data-aos="fade-up">
        <p>
          You can duplicate this sample page and create any number of inner pages you like!
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  @endsection