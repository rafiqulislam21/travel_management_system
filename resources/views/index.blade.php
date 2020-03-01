@extends('template')

@section('title')
Travel Agency
@endsection

@section('mainContent')
<div class="pb-2" >
  <!-- <div class="background background-image" style="background-image: url('/img/travel.jpg'); max-width: 100%; height: 674.5px;" data-imgwidth="1903"></div> -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 sliderImg" src="/img/35.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-white text-white display-4">Find Your Perfact</h3>
          <h1 class="text-danger display-2">Vacation</h1>
          <h4 class="text-white text-white display-5">Europe, India, malaysia, Singapur, Dubai, Egypt Etc</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 sliderImg" src="/img/36.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-success text-danger display-4">Open Your Eyes</h3>
          <h1 class="text-warning display-1">See Beautiful Nature</h1>

        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 sliderImg" src="/img/37.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <<h3 class="text-danger display-2">Travel makes</h3>
          <h1 class="text-danger display-2">One modest.</h1>
          <h4 class="text-white display-5">You see what a tiny place you occupy in the world.</h4>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 sliderImg" src="/img/38.jpg" alt="Fourth slide">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-success display-4">One's destination</h3>
          <h1 class="text-white display-3">is never a Place</h1>
          <h4 class="text-danger display-5">but a new way of seeing things</h4>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container py-2 ">
  <p class="text-center" style="font-size: 30px; color:#21CCFF;">OUR EXCLUSIVE OFFERS @ BEST PRICE.</p>
  <div class="row">
    @foreach($packages as $row)
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-3">
      <div class="card bg-light">
        <div class="p-3">
          <div class="img-hover-zoom img-hover-zoom--brightness ">
            <img class="card-img-top " src="{{asset($row['image1'])}}" alt="Card image cap">
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
