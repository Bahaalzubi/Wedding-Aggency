@extends('layouts.admin')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Venues Table</h6>
                        <button class="btn btn-sm btn-success float-end" data-toggle="modal" data-target="#addVenueModal">Add Venue</button>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($venues as $venue)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $venue->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm">{{ $venue->location }}</h6>
                                        
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <h6 class="mb-0 text-sm">{{ $venue->phone }}</h6>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <h6 class="mb-0 text-sm">{{ $venue->details }}</h6>
                                    </td>
                                    <td >
                                        <img style="width: 50px" src="{{ asset('features/images/' . $venue->image) }}" alt="Venue Image">
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

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Catering Table</h6>
                        <button class="btn btn-sm btn-success float-end" data-toggle="modal" data-target="#addCateringModal">Add Catering</button>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($caterings as $catering)
                                <tr>
                                    <td>{{ $catering->name }}</td>
                                    <td>{{ $catering->price }} Jd</td>
                                    <td class="text-center">{{ $catering->type }}</td>
                                    <td class="text-center">{{ $catering->details }}</td>
                                    <td >
                                        <img style="width: 50px" src="{{ asset('features/images/' . $catering->image) }}" alt="Catering Image">

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

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Themes Table</h6>
                        <button class="btn btn-sm btn-success float-end" data-toggle="modal" data-target="#addThemeModal">Add Theme</button>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">image</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($themes as $theme)
                                <tr>
                                    <td>{{ $theme->name }}</td>
                                    <td>{{ $theme->price }} Jd</td>
                                    <td class="text-center">{{ $theme->details }}</td>
                                    <td class="text-center"> <img style="width: 50px" src="{{ asset('features/images/' . $theme->image) }}" alt="Catering Image">
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

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Cake Table</h6>
                        <button class="btn btn-sm btn-success float-end" data-toggle="modal" data-target="#addCakeModal">Add Cake</button>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cakes as $cake)
                                <tr>
                                    <td>{{ $cake->name }}</td>
                                    <td>{{ $cake->price }} Jd</td>
                                    <td class="text-center">{{ $cake->type }}</td>
                                    <td class="text-center">{{ $cake->details }}</td>
                                    <td class="text-center"> <img style="width: 50px" src="{{ asset('features/images/' . $cake->image) }}" alt="Catering Image">
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

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">DJ and Zaffeh Table</h6>
                        <button class="btn btn-sm btn-success float-end" data-toggle="modal" data-target="#addDjModal">Add DJ</button>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($djs as $dj)
                                <tr>
                                    <td>{{ $dj->name }}</td>
                                    <td>{{ $dj->price }} Jd</td>
                                    <td class="text-center">{{ $dj->phone }}</td>
                                    <td class="text-center">{{ $dj->details }}</td>
                                    <td class="text-center"> <img style="width: 50px" src="{{ asset('features/images/' . $dj->image) }}" alt="Catering Image">
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

</div>

<!-- Add Venue Modal -->
<div class="modal fade" id="addVenueModal" tabindex="-1" role="dialog" aria-labelledby="addVenueModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVenueModalLabel">Add Venue</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.venues.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="venueName">Name</label>
                        <input type="text" class="form-control" id="venueName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="venueLocation">Location</label>
                        <input type="text" class="form-control" id="venueLocation" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="venuePhone">Type</label>
                        <input type="text" class="form-control" id="venuePhone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="venueDetails">Details</label>
                        <textarea class="form-control" id="venueDetails" name="details" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="venuePrice">Price</label>
                        <input type="text" class="form-control" id="venuePrice" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="venueImage">Image</label>
                        <input type="file" class="form-control" id="venueImage" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Add Catering Modal -->
<div class="modal fade" id="addCateringModal" tabindex="-1" role="dialog" aria-labelledby="addCateringModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVenueModalLabel">Add Catering</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.catering.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cateringName">Name</label>
                        <input type="text" class="form-control" id="cateringName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="cateringPrice">price</label>
                        <input type="text" class="form-control" id="cateringPrice" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="cateringType">type</label>
                        <input type="text" class="form-control" id="cateringType" name="type" >
                    </div>
                    <div class="form-group">
                        <label for="cateringDetails">details</label>
                        <textarea class="form-control" id="cateringDetails" name="details" ></textarea>
                    </div>
                   
                    <div class="form-group">
                        <label for="cateringImage">Image</label>
                        <input type="file" class="form-control" id="cateringImage" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Theme Modal -->
<div class="modal fade" id="addThemeModal" tabindex="-1" role="dialog" aria-labelledby="addThemeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addThemeModalLabel">Add Theme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.theme.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="themeName">Name</label>
                        <input type="text" class="form-control" id="themeName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="themePrice">Price</label>
                        <input type="text" class="form-control" id="themePrice" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="themeDetails">Details</label>
                        <textarea class="form-control" id="themeDetails" name="details" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="themeImage">Image</label>
                        <input type="file" class="form-control" id="themeImage" name="image">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add Cake Modal -->
<div class="modal fade" id="addCakeModal" tabindex="-1" role="dialog" aria-labelledby="addCakeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCakeModalLabel">Add Cake</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.cake.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cakeName">Name</label>
                        <input type="text" class="form-control" id="cakeName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="cakePrice">Price</label>
                        <input type="text" class="form-control" id="cakePrice" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="cakeType">Type</label>
                        <input type="text" class="form-control" id="cakeType" name="type" >
                    </div>
                    <div class="form-group">
                        <label for="cakeDetails">Details</label>
                        <textarea class="form-control" id="cakeDetails" name="details" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cakeImage">Image</label>
                        <input type="file" class="form-control" id="cakeImage" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Add DJ Modal -->
<!-- Add DJ Modal -->
<div class="modal fade" id="addDjModal" tabindex="-1" role="dialog" aria-labelledby="addDjModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDjModalLabel">Add DJ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.dj.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="djName">Name</label>
                        <input type="text" class="form-control" id="djName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="djPhone">Phone</label>
                        <input type="text" class="form-control" id="djPhone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="djDetails">Details</label>
                        <textarea class="form-control" id="djDetails" name="details" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="djPrice">Price</label>
                        <input type="text" class="form-control" id="djPrice" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="djImage">Image</label>
                        <input type="file" class="form-control" id="djImage" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Include necessary libraries and scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize the Bootstrap modal
        $('#addVenueModal').modal({
            backdrop: 'static',
            keyboard: false
        });
    });
</script>

@endsection
