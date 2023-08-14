@extends('layouts.admin')

@section('content')
       
    <div class="container-fluid py-4">

        <div class="row">


         <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
        <div class="card-header p-3 pt-2">
            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
            </div>
            <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Bookings</p>
                <h4 class="mb-0">{{ $totalBookings }}</h4>
            </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">
            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
        </div>
    </div>
</div>



<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
  <div class="card">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
              <i class="material-icons opacity-10">person</i>
          </div>
          <div class="text-end pt-1">
              <p class="text-sm mb-0 text-capitalize">New Clients</p>
              <h4 class="mb-0">{{ $totalUsers }}</h4>
          </div>
      </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
          <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span> than last month </p>
      </div>
  </div>
</div>




        

          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Sales</p>
                  <h4 class="mb-0">$103,430</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize"> Clients</p>
                  <h4 class="mb-0">3,462</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-3">
                <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
              </div>
            </div>
          </div>

        </div>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <div class="chart">
                    <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0 ">Website Views</h6>
                <p class="text-sm ">Last Campaign Performance</p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                  <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0 "> Daily Sales </h6>
                <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm"> updated 4 min ago </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2 ">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                  <div class="chart">
                    <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0 ">Completed Tasks</h6>
                <p class="text-sm ">Last Campaign Performance</p>
                <hr class="dark horizontal">
                <div class="d-flex ">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">just updated</p>
                </div>
              </div>
            </div>
          </div>
        </div><div class="row mb-4">
          <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
              <!-- ... card header ... -->
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <!-- ... table headers ... -->
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Booking Details</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                    </thead>
                    <tbody>
                      @foreach($bookings as $booking)
                      <tr>
                        <!-- ... table data ... -->
                        <tr>
                          <td>
                              <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">
                                      Guests: {{ $booking->details ? $booking->details->number_of_guest : 'N/A' }} <br>
                                      DJ: {{ $booking->details && $booking->details->dj ? $booking->details->dj->name : 'N/A' }} <br>
                                      Venue: {{ $booking->details && $booking->details->venue ? $booking->details->venue->name : 'N/A' }} <br>
                                      Catering: {{ $booking->details && $booking->details->catering ? $booking->details->catering->name : 'N/A' }} <br>
                                      Theme: {{ $booking->details && $booking->details->theme ? $booking->details->theme->name : 'N/A' }} <br>
                                      Cake: {{ $booking->details && $booking->details->cake ? $booking->details->cake->name : 'N/A' }}
                                  </h6>
                              </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">
                                      {{ $booking->user ? $booking->user->name . ' (' . $booking->user->email . ')' : 'N/A' }}
                                  </h6>
                              </div>
                          </td>
                      </tr>
                      
                    
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
       
    @endsection