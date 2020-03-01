@extends('template')

@section('title')
View Packages
@endsection

@section('mainContent')

<div class="container-fluid page-title-bar py-2 text-center border">
  <p class="mb-0">View Packages</p>
  <small><p>Home / Destinations / View Packages</p></small>
</div>

<div class="container py-2 ">
  <p class="text-center" style="font-size: 30px; color:#21CCFF;">View Packages</p>

  <p><strong>Pack name: </strong> {{$package['name']}}</p>

  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-3">
      <div class="card bg-light" >
        <div class="p-2">
          <div class="">
            <img class="card-img-top " src="{{asset($package['image1'])}}" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-3">
      <div class="card bg-light" >
        <div class="p-2">
          <div class="">
            <img class="card-img-top " src="{{asset($package['image2'])}}" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-3">
      <div class="card bg-light" >
        <div class="p-2">
          <div class="">
          <img class="card-img-top " src="{{asset($package['image3'])}}" alt="Card image cap">
          </div>
        </div>
      </div>
    </div>
  </div>
<hr>
  <div class="">
    <p><strong>Catagory: </strong> {{$package['catagory']}}</p>
    <p><strong>Subcatagory: </strong> {{$package['subcatagory']}}</p>
    <p><strong>Price: </strong> {{$package['price']}} /=</p>
    <p>{{$package['details']}}</p>
    <a href="#enquery" class="btn btn-outline-info" data-toggle="modal">Enquery</a>
  </div>

  @if(!Auth::guest())
  <!-- Edit Modal start -->
  <div class="modal fade" id="enquery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-info"  id="exampleModalLabel"><i class="fas fa-edit"></i>Ener Informations</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-sample" action="{{route('insertEnquery')}}" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}

            <div class="form-group">
              <!-- hidden items -->
              <input type="hidden" class="form-control" value="1" name="user_id"  required>
              <input type="hidden" class="form-control" value="{{$package['id']}}" name="package_id"  required>
              <input type="hidden" class="form-control" value="{{$package['price']}} " name="total_amount"  required>
            </div>

            <div class="form-group">
              <label for="emp_name">Name</label>
              <input type="text" class="form-control" name="name"  required>
            </div>

            <div class="form-group">
              <label for="ex">Gender</label>
              <select class="browser-default custom-select" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>

            <div class="form-group">
              <label for="ex">Mobile No</label>
              <input type="text" class="form-control" name="phone" required>
            </div>

            <div class="form-group">
              <label for="ex">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
              <label for="ex">No.of Days</label>
              <input type="number" class="form-control" name="no_days" required>
            </div>

            <div class="form-group">
              <label for="ex">No.of Children</label>
              <input type="number" class="form-control" name="no_childrens" required>
            </div>

            <div class="form-group">
              <label for="ex">No.of Adults</label>
              <input type="number" class="form-control" name="no_adults" required>
            </div>

            <div class="form-group">
              <label for="ex">Enquiry Message</label>
              <textarea class="form-control" rows="4" cols="80" name="enquiry_message" required></textarea>
            </div>

            <div class="float-right">
              <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-outline-primary btn-sm">Submit</button>
              <!-- <a href="{{route('invoice')}}" class="btn btn-outline-primary btn-sm">Submit</a> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Modal end -->
  @else
  <!-- Edit Modal start -->
  <div class="modal fade" id="enquery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger"  id="exampleModalLabel">Login needed!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4 class="text-center py-3">You must login first!</h4>
          <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm text-center">Login</a>
          <a href="{{route('register')}}" class="btn btn-outline-warning btn-sm text-center">Register</a>

            <div class="float-right">
              <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cancel</button>
              <!-- <a href="{{route('invoice')}}" class="btn btn-outline-primary btn-sm">Submit</a> -->
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Modal end -->
  @endif

</div>
@endsection
