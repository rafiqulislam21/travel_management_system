@extends('template')

@section('title')
Destinations
@endsection

@section('mainContent')

<div class="container-fluid page-title-bar py-2 text-center border">
  <p class="mb-0">Destinations</p>
  <small><p>Home / Destinations</p></small>
</div>

<div class="container py-2 ">
  <p class="text-center" style="font-size: 30px; color:#21CCFF;">OUR EXCLUSIVE EUROPE OFFERS @ BEST PRICE.</p>
  <div class="row">
    @foreach($packages as $row)
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-3">
        <div class="card bg-light">
          <div class="p-3">
            <div class="img-hover-zoom img-hover-zoom--brightness ">
              <img class="card-img-top " src="{{$row['image1']}}" alt="Card image cap">
            </div>
          </div>

          <div class="card-body text-center pt-0">
            <h5 class="card-title"><a class=" text-decoration-none" href="#" >{{$row['name']}}</a></h5>
            <p class="card-text">PRICE STARTS FROM</p>
            <h5 class="card-title" style="color:#0000FF;">BDT {{$row['price']}}/=</h5>

            <a href="{{route('viewPackages',$row['id'])}}" class="btn btn-sm btn-warning details">VIEW DETAILS</a>
          </div>
        </div>
      </div>
    @endforeach








  </div>
</div>
@endsection
