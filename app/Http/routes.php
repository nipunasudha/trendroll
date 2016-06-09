<?php
use Illuminate\Http\Request;
use App\Product;
//------------------------------------------------------------------------------
//-----------------------------Frontend routes----------------------------------
Route::auth();
//__________________HOME___________________________________________
Route::get('/', function () {
  return view('homepage',['tab' => 'home']);
});
Route::get('/home', function () {
  return view('homepage',['tab' => 'home']);
});
//_________________ PROFILE___________________________________________
Route::get('profile', function(){
  return redirect('profile/dashboard');
});
Route::get('/profile/{page}', 'UserProfilePageController@index');
//______________________PRODUCTS___________________________________________
Route::get('/products/{forwhome}','ProductController@filter_for_his_her');
Route::get('/products/{forwhome}/view/{item_id}','ProductController@view_item');

//____________________ SELLERS___________________________________________
Route::get('/sellers', function () {
  return view('seller_list',['tab' => 'sellers']);
});
Route::get('/sellers/{id}', function ($id) {
  return view('seller_profile',['tab'=> 'seller']);
});
//_____________________ OTHER FRONTEND _____________________________________
Route::get('/about', function () {
  return view('/extra_pages/about_us');
});
Route::get('/contact', function () {
  return view('/extra_pages/contact_us');
});






//-----------------------------Test routes----------------------------------
//______________________________Modal _____________________________________
Route::get('/modaltest', function () {
  return view('testviews/modal_test');
});
//_________________________ database read write ________________________________
Route::get('list', 'DataReadController@read_products');
Route::post('list','DataWriteController@write_products');
Route::get('add', function(){
  return view('add_product');
});
//_______________________ file uploading test ______________________________

Route::post('upload', 'UploadController@upload_image');
Route::get('upload', function () {
  return view('testviews/upload_image');
});
//________________________ frontend test new version ________________________

Route::get('frontend', function(){
  return view('layouts/frontend');
});
//________________________ JSON TESTINGS ______________________________________
Route::get('getjson', 'JsonRespondController@test');
Route::get('jsontest', function () {
  return view('testviews.jsontest');
});















//-----------------------------Backend routes----------------------------------
//  SECURE THESE!!!!!!!!
//===========  ADMIN PANEL ===============//

Route::get('/admin','RedirecttoAdminPanelController@check_and_redirect');
Route::get('/adm-sellers', function () {
  return view('backendviews/adminpanel_sellers');
});
Route::get('/adm-products','DataReadController@read_products');
Route::get('/adm-employees', function () {
  return view('backendviews/adminpanel_employees');
});
