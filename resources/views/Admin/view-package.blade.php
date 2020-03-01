@extends('Admin.template.template')
@section('page_title')
View Package
@endsection

@section('main_content')

<div class="container mt-2">
  <div class="table-responsive">
    <table class="col-md-12 table table-hover   table-condensed cf" id="myTable">
      <thead>
        <tr>
          <th >#</th>
          <th scope="col">Package Name</th>
          <th scope="col">Category</th>
          <th scope="col">Sub-category</th>
          <th scope="col">Destination</th>
          <th scope="col">price</th>
          <th scope="col">Image1</th>
          <th scope="col">Image2</th>
          <th scope="col">Image3</th>
          <th scope="col">Edit/Delete</th>
        </tr>
      </thead>
      <tbody>
        @php
        $i=1;
        @endphp
        @foreach ($packages as $row)

        <tr>
          <td >{{$i}}</td>
          <td>{{$row['name']}}</td>
          <td>{{$row['catagory']}}</td>
          <td>{{$row['subcatagory']}}</td>
          <td>{{$row['destination']}}</td>
          <td>{{$row['price']}}</td>
          <td><img  height="60" width="80" src="{{asset($row['image1'])}}" alt="package image"></td>

          <td><img  height="60" width="80" src="{{asset($row['image2'])}}" alt="package image"></td>

          <td><img  height="60" width="80" src="{{asset($row['image3'])}}" alt="package image"></td>

          <td> <a href="#editEmp{{$i}}" class="p-2 text-warning" data-toggle="modal" ><i class="fas fa-edit"></i></a>
            <a href="#deleteEmp{{$i}}" class="p-2 text-danger" data-toggle="modal" ><i class="fas fa-trash-alt"></i></a>

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
                    <form class="form-sample" action="{{route('packageUpdate',$row['id'])}}" method="POST" enctype="multipart/form-data" id="addimg">
                      {{ csrf_field() }}
                      <!-- <div class="form-group">
                        <label for="package_id">Package Id</label>
                        <input type="text" class="form-control" id="package_id" placeholder="Enter package id" name="package_id" value="{{$row['id']}}" required>
                      </div> -->

                      <div class="form-group">
                        <label for="package_name">Package Name</label>
                        <input type="text" class="form-control" id="package_name" placeholder="Enter Package Name" name="package_name" value="{{$row['name']}}" required>
                      </div>

                      <div class="form-group">
                        <label for="package_category">Package Category</label>
                        <input type="text" class="form-control" id="package_category" placeholder="Enter Package Category" name="package_category" value="{{$row['catagory']}}" required>
                      </div>

                      <div class="form-group">
                        <label for="package_category">Package Sub-Category</label>
                        <input type="text" class="form-control" id="package_sub-category" placeholder="Enter Package Category" name="package_sub_category" value="{{$row['subcatagory']}}" required>
                      </div>

                      <div class="form-group">
                        <label for="package_category">Package Destination</label>
                        <input type="text" class="form-control" id="package_destination" placeholder="Enter Package Category" name="package_destination" value="{{$row['destination']}}" required>
                      </div>

                      <div class="form-group">
                        <label for="package_price">Package Price</label>
                        <input type="text" class="form-control" id="package_price" placeholder="Enter Employee name" name="package_price" value="{{$row['price']}}" required>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                            <label for="package_images">Image 1</label>
                            <div>
                              <img class="w-100 mb-2" src="{{asset($row['image1'])}}" alt="package image">
                              <input type="file" name="image1" accept="image/jpg, image/jpeg, image/png, image/svg, image/gif, image/bmp">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <label for="package_images">Image 2</label>
                            <div>
                              <img class="w-100  mb-2" src="{{asset($row['image2'])}}" alt="package image">
                              <input type="file" name="image2" accept="image/jpg, image/jpeg, image/png, image/svg, image/gif, image/bmp">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <label for="package_images">Image 3</label>
                            <div>
                              <img class="w-100 mb-2" src="{{asset($row['image3'])}}" alt="package image" accept="image/jpg, image/jpeg, image/png, image/svg, image/gif, image/bmp">
                              <input type="file" name="image3">
                            </div>
                          </div>

                        </div>
                        <!-- //row -->


                      </div>

                      <div class="form-group">
                        <label for="packag_details">Package Details</label>
                        <textarea  class="form-control" id="packag_details" placeholder="Enter Employee salary" name="package_description" value="" required>{{$row['details']}}</textarea>
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
                    <form class="form-sample" action="{{route('packageDelete', $row['id'])}}" method="POST">
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
