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
Auth::routes();
//Route::redirect('register','register/company');


Route::group([], function () {

    Route::view('apps/calendar','apps.calendar');
    Route::view('apps/email/compose','apps.email.compose');
    Route::view('apps/project/list','apps.project.list');
    Route::view('apps/project/detail','apps.project.detail');
    Route::view('apps/task/list','apps.task.list');
    Route::view('apps/task/board','apps.task.board');
    Route::view('layout-example/horizontal','layout-example.horizontal');

    Route::view('forms/basic','forms.basic');
    Route::view('charts','charts');


});

Route::post('distance_calculator','CalculationController@getDistance');
// Route::get('pages-logout', 'RoutingController@logout');
//     Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
//     Route::get('{first}/{second}', 'RoutingController@secondLevel');
// Route::get('{any}', 'RoutingController@root');
// Route::get('dashboard', 'RoutingController@index');


Route::get('/','RoutingController@home');
Route::view('about_us','front.about_us');
Route::view('contact_us','front.contact_us');
Route::view('faqs','front.faqs');
Route::view('blogs','front.blog_I');
Route::view('blog_II','front.blog_II');
Route::view('page1','front.page1');
Route::view('calculator','front.calculator');
Route::view('home_page','front.home_page');
Route::view('pricing','front.pricing');

Route::view('home2','front.home2');
Route::view('company_profile', 'front.company_profile_page');
Route::view('register/company','auth.company_register');

Route::post('register/company', 'UserController@store');

Route::get('get-quote','CalculationController@getQuote');

Route::prefix('admin')->middleware(['auth'])->group(function (){
    Route::view('dashboard','admin.dashboard');
    Route::resource('companies', 'Admin\Companies');
    Route::resource('contact_us', 'Admin\ContactUsController');
    Route::resource('blogs', 'Admin\BlogsController');
    Route::resource('blogs-comments', 'Admin\BlogCommentsController');
    Route::get('blogs/{blog}/update-status', 'Admin\BlogsController@update_status');
    Route::resource('leads', 'Admin\LeadsController');
    Route::get('completed-leads', 'Admin\LeadsController@completed');
    Route::get('leads/{lead}/change-status', 'Admin\LeadsController@change_status');

});

Route::prefix('company')->middleware(['auth'])->group(function (){
    Route::view('dashboard','companies.dashboard');
    Route::resource('profile','Company\ProfileController');
    Route::resource('services','Company\ServicesController');
    Route::get('services/{service}/update_status', 'Company\ServicesController@update_status');
    Route::post('add-logo','Company\ProfileController@addLogo');
    Route::resource('blogs', 'Company\BlogsController');
    Route::get('blogs/{blog}/update-status', 'Company\BlogsController@update_status');
    Route::resource('leads', 'Company\LeadsController');
    Route::get('completed-leads', 'Company\LeadsController@completed');
    Route::get('leads/{lead}/change-status', 'Company\LeadsController@change_status');
});

Route::prefix('user')->middleware(['auth'])->group(function (){
    Route::view('dashboard','user.dashboard');
    Route::resource('profile','User\ProfileController');

});

Route::post('contact_us','Admin\ContactUsController@store');
Route::post('getLocation','CalculationController@getLocation');

Route::get('{first}/{second}', 'RoutingController@secondLevel');

Route::get('test','CalculationController@test');

Route::post('file-upload','CalculationController@fileUpload');

