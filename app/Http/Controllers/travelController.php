<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Enquery;
use App\Models\Invoice;
use App\Models\Packages;
use App\Models\Visa;

class travelController extends Controller
{
    function index(){
      $packages = Packages::where('status',1)->get()->toArray();

      // $tourCatagory = Packages::select('catagory')->distinct('catagory')->get()->toArray();
      // print_r($tourCatagory);die;

      return(view('index', compact('packages')));
    }

    function destinations($catagory){
      // print_r($catagory);die;
      return(view('destinations'));
    }

    function filtered_packages($catagory){
      // print_r($catagory);die;
      $packages = Packages::where('catagory',$catagory)->get()->toArray();
      // echo "<pre>";
      // print_r($packages);die;

      return(view('destinations', compact('packages')));
    }

    function viewPackages($id){
      // $package = Packages::where('id',$id)->get()->toArray();
      $package = Packages::find($id);
      // echo "<pre>";
      // print_r($package);die;
      return(view('view_packages', compact('package')));
    }

    function insertEnquery(Request $request){
      date_default_timezone_set("Asia/Dhaka");
      $currentDateTime = date("Y-m-d H:i:s");
      $dueDate = date('Y-m-d H:i:s', strtotime('7 days'));
      $user_id = $request->input('user_id');
      $package_id = $request->input('package_id');

      $enquery = new Enquery();
      $enquery->user_id = $user_id;
      $enquery->package_id = $package_id;
      $enquery->name = $request->input('name');
      $enquery->gender = $request->input('gender');
      $enquery->phone = $request->input('phone');
      $enquery->email = $request->input('email');
      $enquery->day = $request->input('no_days');
      $enquery->children = $request->input('no_childrens');
      $enquery->adult = $request->input('no_adults');
      $enquery->message = $request->input('enquiry_message');
      $enquery->post_date = $currentDateTime;
      $enquery->save();

      $invoice = new Invoice();
      $randomNumber = rand(10000,100000);
      $randomNumber2 = rand(1000,10000);
      $invoice->invoice_id = $randomNumber2;
      $invoice->user_id = $request->input('user_id');
      $invoice->package_id = $package_id;
      $invoice->code = $randomNumber;
      $invoice->total_amount = $request->input('total_amount');
      $invoice->created_date = $currentDateTime;
      $invoice->due_date = $dueDate;
      $invoice->save();

      $invoiceInfo = [];
      $invoiceInfo['invoice_id'] = $randomNumber2;
      $invoiceInfo['user_id'] = $user_id;
      $invoiceInfo['package_id'] = $package_id;
      $invoiceInfo['code'] = $randomNumber;
      $invoiceInfo['total_amount'] = $request->input('total_amount');
      $invoiceInfo['created_date'] = $currentDateTime;
      $invoiceInfo['due_date'] = $dueDate;

      $success = "Enquery successful!";
        // return redirect()->route('invoice')->with('success', 'Enquery successful!')->with('invoiceInfo', $invoiceInfo);
        return(view('view_invoice',compact('invoiceInfo','success')));
    }

    function invoice(){
      // print_r("works");die;
      return(view('view_invoice'));
    }

    function contactUs(){
      return(view('contact_us'));
    }

    function ContactInsert(Request $request){
      date_default_timezone_set("Asia/Dhaka");
      $currentDateTime = date("Y-m-d H:i:s");

      $contactUs = new Contact();
      $contactUs->name = $request->input('c_name');
      $contactUs->email = $request->input('c_email');
      $contactUs->phone = $request->input('c_mobile');
      $contactUs->message = $request->input('c_message');
      $contactUs->messageTime = $currentDateTime;
      $contactUs->status = 1;
      $contactUs->save();

        return redirect()->route('contactUs')->with('success', 'Message sent!');
    }

    function aboutUs(){
      return(view('about_us'));
    }

    function visaServices(){
      $visa = Visa::all()->toArray();

      return(view('visa_services',compact('visa')));
    }
}
