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

Route::post('message','LoginController@MailSend');
Route::get('photo_gallery',function(){
    return view('photo_gallery');
});

Route::get('our_team',function(){
    return view('our_team');
});
Route::post('sms_submit','LoginController@sms_verify');
Route::post('RegistrationVerify','LoginController@RegistrationVerify');
Route::post('RegistrationSubmit','LoginController@RegistrationSubmit');

Route::get('/', function () {
    return view('index');
});
Route::get('/about_more', function () {
    return view('about_more');
});

Route::get('/adminedu', function () {
    return view('unikedu');
});

Route::group(['middleware'=>'student'], function () {

	// student route

	Route::get('student/index','StudentController@index');

    Route::post('student/submit','StudentController@submit');

	Route::get('student/view','StudentController@register');

    
});

Route::post('/studentLogin','LoginController@studentLogin');

Route::get('/studentLogout','LoginController@studentLogout');

Route::post('/adminLogin','LoginController@adminLogin');


Route::get('all_photo',function () {
    return view('photo');
});

Route::get('all_video',function () {
    return view('video');
});

Route::get('login',function () {
    return view('login');
});

Route::get('service',function () {
    return view('service');
});

Route::get('service',function () {
    return view('service');
});

Route::get('service',function () {
    return view('service');
});







// stuff route


Route::group(['middleware'=>'warrior'], function () {

    // warrior route

    Route::get('warrior/list','StuffController@list1');

    Route::get('warrior/details/{id}','StuffController@details1');

    Route::post('warrior/submit','StuffController@update');
    
    
});


Route::group(['middleware'=>'champion'], function () {

    // champion route

    Route::get('champion/list','StuffController@list3');

    Route::get('champion/details/{id}','StuffController@details3');

    Route::post('champion/submit','StuffController@champion_update');

    
});


Route::group(['middleware'=>'solder'], function () {

    // solder route

    Route::get('solder/list','StuffController@list4');

    Route::get('solder/details/{id}','StuffController@details4');

    Route::post('solder/submit','StuffController@solder_update');


    
});


Route::group(['middleware'=>'admin'], function () {

    
    // admin route

    Route::get('admin/registration','AdminController@index');

    Route::get('admin/reporting','AdminController@reporting');

    Route::get('admin/details_form/{id}','AdminController@details_form');

    Route::post('admin/submit','AdminController@admin_update');

    Route::get('admin/report/{id}','AdminController@report');

    Route::get('admin/docs/{id}','AdminController@docs');
    
    Route::get('admin/guarantor_report/{id}','AdminController@guarantor_report');

    Route::get('admin/income/{id}','AdminController@income_report');

    Route::get('admin/tin_report/{id}','AdminController@tin_report');

    Route::get('admin/bank_report/{id}','AdminController@bank_report');
   
    Route::get('admin/job_report/{id}','AdminController@job_report');
    
    Route::get('admin/std_birth_certificate/{id}','AdminController@std_birth_certificate');
    
    Route::get('admin/std_running_certificate/{id}','AdminController@std_running_certificate');

    Route::get('admin/std_job_certificate/{id1}','AdminController@std_job_certificate');

    Route::get('admin/std_uni_certificate/{id}','AdminController@std_uni_certificate');

    Route::get('admin/trade/{id}','AdminController@trade_certificate');

    Route::get('admin/income_tax/{id}','AdminController@income_tax');

    Route::get('admin/interview/{id}','AdminController@interview');
});



