@extends('Admin.template.template')
@section('page_title')
Add Empolyee
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
      <h4>Add Employee</h4>
    </div>

    <div class="card-body shadow p-4 bg-light" >

      <form action="{{route('addEmployeePost')}}" method="POST" class="">
        {{csrf_field()}}


        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="emp_name" name="emp_name"  placeholder="" required="true">
                <label for="emp_name">Empoyee Name</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="far fa-envelope"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="email" class="" id="emp_email" name="emp_email"  placeholder="" required="true">
                <label for="emp_email">Employee Email</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-lock"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="password" class="" id="emp_password" name="emp_password"  placeholder="" required="true">
                <label for="emp_password">Password</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-restroom"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >

              <div class="radio" style="border-bottom: 1px solid #288CF0 ; padding-bottom: 17px; margin-bottom:30px;">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="customRadio" name="emp_gender" value="male">
                  <label class="custom-control-label" for="customRadio">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="customRadio2" name="emp_gender" value="female">
                  <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-phone"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="emp_phone" name="emp_phone"  placeholder="" required="true">
                <label for="emp_phone">Phone</label>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group ">
          <div class="row ">
            <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-map-marker-alt"></i></p>
            </div>

            <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
              <div class="input-field-custom margin-control-form form-left">
                <input type="text" class="" id="emp_phone" name="emp_address"  placeholder="" required="true">
                <label for="emp_address">Address</label>
              </div>
            </div>
          </div>
        </div>

        <input type="hidden" class="" id="emp_name" name="status" value="1"  placeholder="" required="true">

        <button type="submit" class=" custom-btn">Submit</button>
      </form>
    </div>
  </div>

</div>
@endsection
