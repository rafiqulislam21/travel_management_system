@extends('template')

@section('title')
Invoice
@endsection

@section('mainContent')
<style media="screen">
  p{
    margin-bottom: 0px;
  }
</style>
<div class="container-fluid page-title-bar py-2 text-center border">
  <p class="mb-0">Invoice</p>
  <small><p>Home / Destinations / View-packages/ Invoice</p></small>
</div>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <!-- <strong>success!</strong> -->
  {{$success}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="container py-2 ">
  <p class="text-center" style="font-size: 30px; color:#21CCFF;">Invoice</p>

  <div class="card bg-light p-4 shadow mb-4">
    <p><strong>Dear</strong> Username, </p>
    <p>Greetings from <a href="bizmoorholiday.com">bizmoorholiday.com</a> </p>

    <p>This is to notify that you have made a booking with us details are follows.</p>

    <div class="">
      <p><strong>Invoice# </strong> {{$invoiceInfo['invoice_id']}}</p>
      <p><strong>invoice code: </strong> {{$invoiceInfo['code']}}</p>
      <br>
      <p>Deposit Ammount: BDT&#x9f3;0</p>
      <p>Total Ammount: BDT&#x9f3;{{$invoiceInfo['total_amount']}}</p>


      <p><strong>Due Date: {{$invoiceInfo['due_date']}}</strong></p>
      <p>
        If you do not feel comfortable to pay online, then you can deposit our ank.
      </p>
      <br>
      <p>Bank name: Brack Bank</p>
      <p><strong>Account Name:</strong> <a href="bizmoorholiday.com">Bizmoorholiday</a></p>
      <p><strong>Account No: 15225462432</strong> </p>
      <p>Branch: Gulshan-1</p>
      <p>City: Dhaka-1212</p>
      <p>Country: Bangladesh</p>
      <br>
      <hr>
      <p>You may review your invoice at any time by visiting <a href="http://localhost:8000/destinations/view-packages/invoice">http://localhost:8000/destinations/view-packages/invoice</a> </p>
      <p>Please feel free to call us +8801784238323, +8801711339837</p>
      <br>

      <p>Regards</p>
      <p>Team <a href="bizmoorholiday.com"></a> bizmoorholiday.com</p>
      <p>Billing Depertment</p>
      <p>Rangs Hira, Suite A1(1st Floor)</p>
      <p>Building:63, Road: 12, Sector:10</p>
      <p>Uttara, Dhaka, Bangladesh</p>
      <p>Email: <a href="gmail.com"></a> billing@bizmoorholiday.com.bd</p>
      <p>Phone: +8801784238323, +8801711339837</p>

    </div>
  </div>

  <a href="#bikash" style="background:lightgray;" class="btn m-2" data-toggle="modal">Pay with Bikash <span><img style="height:40px; width: 70px;" src="/img/bikash.png" alt=""></span> </a>
  <a href="#card" style="background:lightgray;" class="btn m-2" data-toggle="modal">Pay with Card <span><img style="height:40px; width: 70px;" src="/img/card.png" alt=""></span> </a>


  <!-- bikash Modal start -->
  <div class="modal fade text-center" id="bikash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-info"  id="exampleModalLabel">Pay with Bikash</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <form class="form-sample" action="#" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}

            <div class="pb-4">
            	<img src="/img/logo-1.png">
            	<p class="thank-text">Thank you for staying with bizmoorholiday.com</p>

            	<div class="bkashBody">
            		<p style="font-size: 20px;">Make your payment in this number through any BKash Customer Wallet</p>
            		<p>আপনার বিকাশ ওয়ালেট থেকে নীচের নাম্বারে টাকা পাঠান</p>
            		<p class="text-red">Please do not reload or refresh this page and pay exact amount.</p>
            	  <hr>
            		  <p class="amount-text">Amount 10.00 Taka</p>
            	  <hr>
            	  	<p class="number-text">01534501530</p>
            	    <p class="trxid-text">Enter bKash TrxID</p>
            	  <!-- form -->
            	  <form class="form-div" action="#" method="post">
            	  	<div>
            	  		<input class="input-field" type="text" placeholder="Enter bKash TrxID" name="" required="true">
            	  	</div>
            	 	<input  type="submit" class="button-design" id="stylebutton" value="VERIFY">
            	  </form>
            	  <p class="bottom-text">Please input bKash Transaction ID in Capital Letters & Only Once, Also <span style="color:red">pay exact amout</span> mentioned in your merchant</p>
            	</div>
            </div>
            <!-- <div class="float-right py-4">
              <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- bikash Modal end -->

  <!-- bikash Modal start -->
  <div class="modal fade text-center" id="card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-info"  id="exampleModalLabel">Pay with Cards</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <form class="form-sample" action="#" method="post" enctype="multipart/form-data" >
            {{ csrf_field() }}

            <div class="pb-4">
            	<img src="/img/logo-1.png">
            	<p class="thank-text">Thank you for staying with bizmoorholiday.com</p>

                        <div id="pay-invoice" class="card bg-light">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">Pay Invoice</h3>
                                </div>
                                <hr>
                                <form action="/echo" method="post" novalidate="novalidate" class="needs-validation">
                                    <div class="form-group text-center">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fab fa-cc-visa"></i></li>
                                            <li class="list-inline-item"><i class="fab fa-cc-mastercard"></i></li>
                                            <!-- <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li> -->
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                        <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="100.00">
                                        <span class="invalid-feedback">Enter the payment amount</span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Name on card</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name" required autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                        <span class="invalid-feedback">Enter the name as shown on credit card</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cc-number" class="control-label mb-1">Card number</label>
                                        <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required="" pattern="[0-9]{16}">
                                        <span class="invalid-feedback">Enter a valid 16 digit card number</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                                                <span class="invalid-feedback">Enter the expiration date</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">Security code</label>
                                            <div class="input-group">
                                                <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off">
                                                <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                    <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                    data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                    data-trigger="hover"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="x_zip" class="control-label mb-1">Postal code</label>
                                        <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code">
                                        <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Pay Now <strong>&#x9f3;</strong> </span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

            </div>
            <!-- <div class="float-right py-4">
              <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- bikash Modal end -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

      <script type="text/javascript">
      $('.form-div').on('submit',function(){
         $('input[type=submit]', this).attr('disabled', 'disabled');
         $('input[type=submit]', this).css("background-color","gray");;
          return false;
      });
      </script>
</div>
@endsection
