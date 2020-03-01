@extends('Admin.template.template')
@section('page_title')
Contact List
@endsection

@section('main_content')

<div class="container mt-2">
<div class="table-responsive">
<table class="col-md-12 table table-hover   table-condensed cf" id="myTable">
  <thead>
    <tr>
      <th >SN</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Messege Time</th>
      <th scope="col">Edit/Delete</th>
     
    </tr>
  </thead>
  <tbody>

  	@foreach($contacts as $contact)
   
    <tr>
      <td >{{$contact['id']}}</td>
      <td >{{$contact['name']}}</td>
      <td >{{$contact['email']}}</td>
      <td>{{$contact['phone']}}</td>
      <td >{{$contact['message']}}</td>
      <td >{{$contact['messageTime']}}</td>
      
        <td> <a href="#edit{{$contact['id']}}" class="p-2 text-warning" data-toggle="modal" ><i class="fas fa-edit"></i></a>
          <a href="#delete{{$contact['id']}}" class="p-2 text-danger" data-toggle="modal" ><i class="fas fa-trash-alt"></i></a>

          <!-- ==============edit modal Start==================== -->

          <div class="modal fade" id="edit{{$contact['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title text-warning"  id="exampleModalLabel"><i class="fas fa-edit"></i> Edit Informations</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                 </button>
               </div>
              <div class="modal-body">
                 <form class="form-sample" action="{{route('contactListUpdate')}}" method="POST" enctype="multipart/form-data" id="addimg">
                     {{ csrf_field() }}
                  <div class="form-group">
                     <label for="contact_id">Contact Id</label>
                     <input type="text" class="form-control" id="contact_id" placeholder="Enter Contact Id" name="contact_id" value="{{$contact['id']}}" required>
                   </div>

                    <div class="form-group">
                      <label for="contact_name">Name</label>
                      <input type="text" class="form-control" id="contact_name" placeholder="Enter Name" name="contact_name" value="{{$contact['name']}}" required>
                    </div>
                      <div class="form-group">
                      <label for="contact_email">Email</label>
                      <input type="text" class="form-control" id="contact_email" placeholder="Enter Email" name="contact_email" value="{{$contact['email']}}" required>
                    </div>
                     <div class="form-group">
                      <label for="contact_phone">Phone</label>
                      <input type="text" class="form-control" id="contact_phone" placeholder="Enter Employee Designation" name="contact_phone" value="{{$contact['phone']}}" required>
                     </div>

                      <div class="form-group">
                      <label for="message">Message</label>
                    
                      <textarea  class="form-control" name="contact_message" required>{{$contact['message']}}</textarea>
                     </div>

                    

                     <div class="form-group">
                      <label for="contact_time">Contact date</label>
                      <input type="text" class="form-control" id="contact_time" placeholder="Enter Time" name="contact_time" value="{{$contact['messageTime']}}" required>
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
           <div class="modal fade" id="delete{{$contact['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         <form class="form-sample" action="{{route('contactListDelete')}}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="contact_id" value="{{$contact['id']}}">
       <button type="submit" class="btn btn-outline-success "><i class="fas fa-check"></i></button>
            </form>

     </div>
     </div>
  </div>
  </div>
 <!-- Delete Modal end -->


       </td>
    </tr>
    @endforeach

   
  </tbody>
</table>

</div>
<!-- table responsive -->

</div>
<!-- container -->
@endsection