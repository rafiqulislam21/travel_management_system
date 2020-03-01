<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Enquery;
use App\Models\Invoice;
use App\Models\Packages;
use App\Models\Visa;
use App\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function index(){
    	return view('Admin.home');
    }

    public function userList(){
      $employee = User::where('userType','user')->where('status',1)->get()->toArray();
    	return view('Admin.user-list', compact('employee'));
    }

    public function userUpdate(Request $request, $id){
      date_default_timezone_set("Asia/Dhaka");
      $dateTime = date('Y-m-d H:i:s');
          $pass = $request->input('emp_password');
          $employee = User::find($id);
          $employee->name = $request->input('emp_name');
          $employee->email = $request->input('emp_email');
          $employee->gender = $request->input('emp_gender');
          $employee->phone = $request->input('emp_phone');
          $employee->address = $request->input('emp_address');
          $employee->updated_at = $dateTime ;
          $employee->save();

          return redirect()->route('userList')->with('success', 'User added successfully!');
    }

    public function userDelete(Request $request, $id){

        $employee = User::find($id);
        $employee->status = 0;
        $employee->save();

          return redirect()->route('userList')->with('warning', 'User Deleted successfully!');

    }


    public function employeeList(){
      $employee = User::where('userType','employee')->where('status',1)->get()->toArray();
    	return view('Admin.employee-list', compact('employee'));
    }

    public function addEmployee(){
    	return view('Admin.add-employee');
    }

    public function addEmployeePost(Request $request){
      date_default_timezone_set("Asia/Dhaka");
      $dateTime = date('Y-m-d H:i:s');
          $pass = $request->input('emp_password');
          $employee = new User();
            // print_r($dateTime);die;
          $employee->name = $request->input('emp_name');
          $employee->userType = "employee";
          $employee->email = $request->input('emp_email');
          $employee->password = Hash::make($pass);
          $employee->gender = $request->input('emp_gender');
          $employee->phone = $request->input('emp_phone');
          $employee->address = $request->input('emp_address');
          $employee->created_at = $dateTime ;
          $employee->updated_at = $dateTime ;
          $employee->status = $request->input('status');
          $employee->save();

          return redirect()->route('addEmployee')->with('success', 'Employee added successfully!');
    }

    public function addEmployeeUpdate(Request $request, $id){
      date_default_timezone_set("Asia/Dhaka");
      $dateTime = date('Y-m-d H:i:s');
          $pass = $request->input('emp_password');
          $employee = User::find($id);
          $employee->name = $request->input('emp_name');
          $employee->email = $request->input('emp_email');
          $employee->gender = $request->input('emp_gender');
          $employee->phone = $request->input('emp_phone');
          $employee->address = $request->input('emp_address');
          $employee->updated_at = $dateTime ;
          $employee->save();

          return redirect()->route('employeeList')->with('success', 'Employee added successfully!');
    }

    public function employeeDelete(Request $request, $id){

        $employee = User::find($id);
        $employee->status = 0;
        $employee->save();

          return redirect()->route('employeeList')->with('warning', 'Employee Deleted successfully!');

    }

//////////////////contact
    public function contactList(){
        $contacts = Contact::where('status',1)->get()->toArray();

    	return view('Admin.contact-list',compact('contacts'));
    }

    public function contactListDelete(Request $request){

      Contact::where('id',$request->input('contact_id'))->update(['status' => 0]);

      return redirect()->route('contactList')->with('success','Contact Deleted Successfully');
    }

    public function contactListUpdate(Request $request){

      $update = Contact::find($request->input('contact_id'));
       $update->id = $request->input('contact_id');
       $update->name = $request->input('contact_name');
       $update->email = $request->input('contact_email');
       $update->phone = $request->input('contact_phone');
       $update->message = $request->input('contact_message');
       $update->messageTime = $request->input('contact_time');
       $update->status = 1;
      $update->save();

      return redirect()->route('contactList')->with('success','Contact Updated Successfully');
    }

    public function viewPackage(){
      $packages = Packages::where('status',1)->get()->toArray();
    	return view('Admin.view-package', compact('packages'));
    }

    public function addPackage(){
        return view('Admin.add-package');
    }

    public function addPackagePost(Request $request){
      date_default_timezone_set("Asia/Dhaka");
      $dateTime = date('d:m:Y H:i:s');

        // if ($request->hasFile('image1')) {
        $file1 = $request->file('image1');
        $file2 = $request->file('image2');
        $file3 = $request->file('image3');

        $fileExt1 = $file1->getClientOriginalExtension();
        $fileExt2 = $file2->getClientOriginalExtension();
        $fileExt3 = $file3->getClientOriginalExtension();
        // $fileSize = $file->getClientSize();
        // if ($fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'bmp' || $fileExt == 'svg') {
          // $name = $file->getClientOriginalName();
          $name1 = str_replace(' ', '_', $file1->getClientOriginalName());
          $upPath1 = public_path().'/img/';
          $path1 = '/img/';
          $file1->move($upPath1, $name1);

          $name2 = str_replace(' ', '_', $file2->getClientOriginalName());
          $upPath2 = public_path().'/img/';
          $path2 = '/img/';
          $file2->move($upPath2, $name2);

          $name3 = str_replace(' ', '_', $file3->getClientOriginalName());
          $upPath3 = public_path().'/img/';
          $path3 = '/img/';
          $file3->move($upPath3, $name3);


          $package = new Packages();

          $package->name = $request->input('package_name');
          $package->image1 = $path1.$name1;
          $package->image2 = $path2.$name2;
          $package->image3 = $path3.$name3;
          $package->catagory = $request->input('package_category');
          $package->subcatagory = $request->input('package_sub_category');
          $package->destination = $request->input('package_destination');
          $package->price = $request->input('package_price');
          $package->details = $request->input('package_description');
          $package->status = 1;

          $package->save();
          // }else {
          //   echo "Selected file is not a Image. Please select an Image.";
          //   die();
          // }

        // }

          return redirect()->route('addPackage')->with('success', 'Package added successfully!');

    }


    public function packageUpdate(Request $request, $id){


        $file1 = $request->file('image1');
        $file2 = $request->file('image2');
        $file3 = $request->file('image3');





        $package = Packages::find($id);

        $package->name = $request->input('package_name');
        $package->catagory = $request->input('package_category');
        $package->subcatagory = $request->input('package_sub_category');
        $package->destination = $request->input('package_destination');
        $package->price = $request->input('package_price');
        $package->details = $request->input('package_description');
        $package->status = 1;


        if ($request->hasFile('image1')) {
          $fileExt1 = $file1->getClientOriginalExtension();
          $name1 = str_replace(' ', '_', $file1->getClientOriginalName());
          $upPath1 = public_path().'/img/';
          $path1 = '/img/';
          $file1->move($upPath1, $name1);
          $package->image1 = $path1.$name1;
        }
        if ($request->hasFile('image2')) {
          $fileExt2 = $file2->getClientOriginalExtension();
          $name2 = str_replace(' ', '_', $file2->getClientOriginalName());
          $upPath2 = public_path().'/img/';
          $path2 = '/img/';
          $file2->move($upPath2, $name2);
          $package->image2 = $path2.$name2;
        }
        if ($request->hasFile('image3')) {
          $fileExt3 = $file3->getClientOriginalExtension();
          $name3 = str_replace(' ', '_', $file3->getClientOriginalName());
          $upPath3 = public_path().'/img/';
          $path3 = '/img/';
          $file3->move($upPath3, $name3);
          $package->image3 = $path3.$name3;
        }

        $package->save();

          return redirect()->route('viewPackage')->with('success', 'Package Updated successfully!');

    }

    public function packageDelete(Request $request, $id){

        $package = Packages::find($id);
        $package->status = 0;
        $package->save();

          return redirect()->route('viewPackage')->with('warning', 'Package Deleted successfully!');

    }

    public function bookingList(){
      $bookingList = Enquery::all()->toArray();
      return view('Admin.booking-list', compact('bookingList'));
    }
}
