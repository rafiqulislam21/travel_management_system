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
          <th scope="col">Day</th>
          <th scope="col">Children</th>
          <th scope="col">Adult</th>
          <th scope="col">Message</th>
          <th scope="col">booking date</th>
          <!-- <th scope="col">Edit/Delete</th> -->
        </tr>
      </thead>
      <tbody>

        @php
        $i=1;
        @endphp
        @foreach ($bookingList as $row)
        <tr>
          <td >{{$i}}</td>
          <td>{{$row['name']}}</td>
          <td>{{$row['email']}}</td>
          <td>{{$row['gender']}}</td>
          <td>{{$row['phone']}}</td>
          <td>{{$row['day']}}</td>
          <td>{{$row['children']}}</td>
          <td>{{$row['adult']}}</td>
          <td>{{$row['message']}}</td>
          <td>{{$row['post_date']}}</td>
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
