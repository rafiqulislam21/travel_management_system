@extends('template')

@section('title')
Visa services
@endsection

@section('mainContent')

<div class="container-fluid page-title-bar py-2 text-center border">
  <p class="mb-0">Visa Services</p>
  <small><p>Home / Visa services</p></small>
</div>

<div class="container-fluid py-2 ">
  <div class="text-center">
    <p  style="font-size: 14pt;">
      <strong><u>CONTACT US FOR VISA PROCESSING SERVICE:</u></strong>
      <p>+880-1784238323, +880-1711339837, +880-1511555571, +880-1714114451</p>
    </p>
  </div>

  <div class=" pt-4 pb-5">
      <table id="data-table" class="table table-hover border " >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">COUNTRY</th>
            <th scope="col">VISA TYPE</th>
            <th scope="col">TOTAL COST</th>
          </tr>
        </thead>
        <tbody>
          @php
          $count = 1;
          @endphp
          @foreach($visa as $row)
          <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$row['country']}}</td>
            <td>{{$row['visa_type']}}</td>
            <td>@BDT {{$row['total_cost']}}</td>
          </tr>
          @php
          $count++;
          @endphp
          @endforeach

        </tbody>
      </table>

  </div>
</div>
@endsection
<!-- <script type="text/javascript">
$(document).ready(function() {
  $('#data-table').DataTable();
} );
</script> -->
