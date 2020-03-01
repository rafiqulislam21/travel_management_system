@extends('Admin.template.template')
@section('page_title')
Empolyee List
@endsection

@section('main_content')

<div class="container mt-2">
  <div class="table-responsive">
    <table class="col-md-12 table table-hover   table-condensed cf" id="myTable">
      <thead>
        <tr>
          <th >#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Join date</th>
          <th scope="col">Edit/Delete</th>
        </tr>
      </thead>
      <tbody>

        @php
        $i=1;
        @endphp
        @foreach ($employee as $row)
        <tr>
          <td >{{$i}}</td>
          <td>{{$row['name']}}</td>
          <td>{{$row['email']}}</td>
          <td>{{$row['gender']}}</td>
          <td>{{$row['phone']}}</td>
          <td>{{$row['address']}}</td>
          <td>{{$row['created_at']}}</td>
          <td> <a href="#editEmp{{$row['id']}}" class="p-2 text-warning" data-toggle="modal" ><i class="fas fa-edit"></i></a>
            <a href="#deleteEmp{{$row['id']}}" class="p-2 text-danger" data-toggle="modal" ><i class="fas fa-trash-alt"></i></a>

            <!-- ==============edit modal Start==================== -->

            <div class="modal fade" id="editEmp{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-warning"  id="exampleModalLabel"><i class="fas fa-edit"></i> Edit Informations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('userUpdate', $row['id'])}}" method="POST" class="">
                      {{csrf_field()}}


                      <div class="form-group ">
                        <div class="row ">
                          <div class="col-md-1 col-sm-1 col-lg-1 col-xl-1 col-1  margin-control-icon"><p  class=" " ><i class="fas fa-file-signature"></i></p>
                          </div>

                          <div class="col-md-10 col-sm-10 col-lg-10 col-xl-10 col-10  px-lg-0" >
                            <div class="input-field-custom margin-control-form form-left">
                              <input type="text" class="" id="emp_name" value="{{$row['name']}}" name="emp_name"  placeholder="" required="true">
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
                              <input type="email" class="" id="emp_email" value="{{$row['email']}}" name="emp_email"  placeholder="" required="true">
                              <label for="emp_email">Employee Email</label>
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
                                <input type="radio" class="custom-control-input" id="customRadio" name="emp_gender" value="male" @if($row['gender']=='male') checked @endif>
                                <label class="custom-control-label" for="customRadio">Male</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="emp_gender" value="female" @if($row['gender']=='female') checked @endif>
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
                              <input type="text" class="" id="emp_phone" value="{{$row['phone']}}" name="emp_phone"  placeholder="" required="true">
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
                              <input type="text" class="" id="emp_address" value="{{$row['address']}}" name="emp_address"  placeholder="" required="true">
                              <label for="emp_address">Address</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="float-right">
                        <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-primary btn-sm">Update</button>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
            </div>

            <!-- =============edit modal end========================= -->

            <!-- Delete Modal start -->
            <div class="modal fade" id="deleteEmp{{$row['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                    <h5 class="modal-title" style="color:red;"  id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i> Delete confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Are you sure want to delete this?

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger " data-dismiss="modal"><i class="fas fa-times"></i></button>
                    <form class="form-sample" action="{{route('userDelete', $row['id'])}}" method="POST">
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-outline-success "><i class="fas fa-check"></i></button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
            <!-- Delete Modal end -->


          </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach

      </tbody>
    </table>

  </div>
  <!-- table responsive -->

</div>
<!-- container -->
@endsection
