@extends('template')

@section('title')
Contact us
@endsection

@section('mainContent')

<div class="container-fluid page-title-bar py-2 text-center border">
  <p class="mb-0">Contact Us</p>
  <small><p>Home / Contact us</p></small>
</div>

<div class="container py-2 ">
  <p class="text-center" style="font-size: 14pt;">
    <strong>We’d Love to Hear From You, Get In Touch With Us! Visit Our Office or Call Us.
      <br>
      Thank You.</strong>
  </p>

  <div class="row pb-5">
    <div class="col-md-6 contact-address text-center ">
      <img class="img-fluid" src="/img/logo-1.png">

      <p><strong>Address</strong></p>
      <p>Rangs Hira, Suite A1(1st Floor), Building:63, Road: 12, Sector:10, Uttara, Dhaka</p>
      <p>_ _ _ _ _ _ _ _ _</p>
      <p><strong>Email Address</strong></p>
      <p>info@bizmoorholiday.com, salehinrezabd@gmail.com</p>
      <p>_ _ _ _ _ _ _ _ _</p>
      <p><strong>CONTACT NUMBERS:</strong></p>
      <p>+880-1784238323, +880-1711339837, +880-1511555571, +880-1714114451</p>

    </div>
    <div class="col-md-6 ">
      <h4 class="text-primary pb-0 mb-0 text-center"><i class="far fa-envelope"></i></h4>
      <hr class="mt-0 pt-0 ">
      <p class="text-center" style="font-size: 20px;"><u><strong>Send us an email using the form below.</strong> </u></p>

      <form action="{{route('ContactInsert')}}" method="POST" >
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputAddress">Your Name (Required)</label>
          <input type="text" class="form-control" name="c_name" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Your Email (Required)</label>
            <input type="email" class="form-control" name="c_email" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Mobile No (Required)</label>
            <input type="text" class="form-control" name="c_mobile" required>
          </div>
        </div>

        <div class="form-group">
          <label for="inputAddress2">Your Message</label>
          <textarea class="form-control" name="c_message" rows="6" cols="80" required></textarea>
        </div>

        <div class="form-group text-center ">
          <button type="submit" class="btn btn-info">SEND MESSAGE</button>
        </div>

      </form>

    </div>

  </div>
</div>
@endsection
