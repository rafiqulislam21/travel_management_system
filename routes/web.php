<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', 'travelController@index')->name('index');
Route::get('/destinations', 'travelController@destinations')->name('destinations');

Route::get('/destinations/packages/{catagory}', 'travelController@filtered_packages')->name('filtered_packages');

Route::get('/destinations/view-packages/{id}', 'travelController@viewPackages')->name('viewPackages');
Route::post('/destinations/view-packages/insert-nquery', 'travelController@insertEnquery')->name('insertEnquery');
Route::get('/destinations/view-packages/invoice/view', 'travelController@invoice')->name('invoice')->middleware('auth');
Route::get('/contact-us', 'travelController@contactUs')->name('contactUs');
Route::post('/contact-us/insert', 'travelController@ContactInsert')->name('ContactInsert');

Route::get('/about-us', 'travelController@aboutUs')->name('aboutUs');
Route::get('/visa-services', 'travelController@visaServices')->name('visaServices');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


///////////////////////Admin routes/////////////////////////

Route::get('/admin-pannel','Admin\MainController@index')->name('homePage');
Route::get('/employee-list','Admin\MainController@employeeList')->name('employeeList');
Route::get('/add-employee','Admin\MainController@addEmployee')->name('addEmployee');
Route::post('/add-employee/post','Admin\MainController@addEmployeePost')->name('addEmployeePost');
Route::post('/add-employee/update/{id}','Admin\MainController@addEmployeeUpdate')->name('addEmployeeUpdate');
Route::post('/add-employee-delete/{id}','Admin\MainController@employeeDelete')->name('employeeDelete');

Route::get('/user-list','Admin\MainController@userList')->name('userList');
Route::post('/add-user/update/{id}','Admin\MainController@userUpdate')->name('userUpdate');
Route::post('/add-user-delete/{id}','Admin\MainController@userDelete')->name('userDelete');

Route::get('/booking-list','Admin\MainController@bookingList')->name('bookingList');
// Route::post('/add-user/update/{id}','Admin\MainController@userUpdate')->name('userUpdate');
// Route::post('/add-user-delete/{id}','Admin\MainController@userDelete')->name('userDelete');

//contact
Route::get('/contact-list','Admin\MainController@contactList')->name('contactList');

Route::post('/contact-list-delete','Admin\MainController@contactListDelete')->name('contactListDelete');
Route::post('/contact-list-update','Admin\MainController@contactListUpdate')->name('contactListUpdate');

//Package
Route::get('/view-package','Admin\MainController@viewPackage')->name('viewPackage');
Route::get('/add-package','Admin\MainController@addPackage')->name('addPackage');
Route::post('/add-package-post','Admin\MainController@addPackagePost')->name('addPackagePost');
Route::post('/add-package-update/{id}','Admin\MainController@packageUpdate')->name('packageUpdate');
Route::post('/add-package-delete/{id}','Admin\MainController@packageDelete')->name('packageDelete');
