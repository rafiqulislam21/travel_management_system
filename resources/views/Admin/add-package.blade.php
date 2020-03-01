@extends('Admin.template.template')
@section('page_title')
Add Package
@endsection

@section('main_content')

@if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">

  {{ session('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="container px-5 mx-5 mt-3">
  <div class="card ">
    <div class="card-header">
      <h4>Add Package</h4>
    </div>

    <div class="card-body shadow p-4 bg-light" >

      <form method="POST" action="{{route('addPackagePost')}}" enctype="multipart/form-data"  class="">
        {{csrf_field()}}


        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="package_name" name="package_name"  placeholder="" required="true">
                <label for="package_name">Package Name</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-sitemap"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="package_category" name="package_category"  placeholder="" required="true">
                <label for="package_category">Package Category </label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-sitemap"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="package_sub_category" name="package_sub_category"  placeholder="" required="true">
                <label for="package_sub_category">Package Sub Category </label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-search-dollar"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="package_destination" name="package_destination"  placeholder="" required="true">
                <label for="package_price">Destination</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-search-dollar"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="package_price" name="package_price"  placeholder="" required="true">
                <label for="package_price">Package Price</label>
              </div>
            </div>
          </div>
        </div>



        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-alt"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left" style="padding-top:40px;">
                <textarea class="" id="package_description" name="package_description"  placeholder="" required="true"> </textarea>
                <label for="package_description">Package Description</label>
              </div>
            </div>
          </div>
        </div>


        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-images"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

              <div class="custom-file ">
                <input type="file" class="custom-file-input " id="customFile" name="image1" accept="image/jpg, image/jpeg, image/png, image/svg, image/gif, image/bmp" required>
                <label class="custom-file-label" for="customFile">Select Image1</label>

              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-images"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

              <div class="custom-file ">
                <input type="file" class="custom-file-input " id="customFile"  name="image2" accept="image/jpg, image/jpeg, image/png, image/svg, image/gif, image/bmp" required>
                <label class="custom-file-label" for="customFile">Select Image2</label>

              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-images"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

              <div class="custom-file ">
                <input type="file" class="custom-file-input " id="customFile" name="image3" accept="image/jpg, image/jpeg, image/png, image/svg, image/gif, image/bmp" required>
                <label class="custom-file-label" for="customFile">Select Image3</label>

              </div>
            </div>
          </div>
        </div>
        <!-- <input type="file" name="image"> -->

        <button type="submit" class=" custom-btn">Submit</button>
      </form>
    </div>
  </div>

</div>
@endsection
