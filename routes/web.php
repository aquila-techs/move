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

// Route::group(['middleware' => 'auth'], function () {
    // Route::get('pages-logout', 'RoutingController@logout');
    // Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
    // Route::get('{first}/{second}', 'RoutingController@secondLevel');
    // Route::get('{any}', 'RoutingController@root');
    // Route::get('/', 'RoutingController@index');

// });

    // Route::get('pages-logout', 'RoutingController@logout');
    // Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel');
    // Route::get('{first}/{second}', 'RoutingController@secondLevel');
    // Route::get('{any}', 'RoutingController@root');
    // Route::get('dashboard', 'RoutingController@index');

    Route::view('/','front.home');
    Route::view('about_us','front.about_us');
    Route::view('contact_us','front.contact_us');
    Route::view('faqs','front.faqs');
    Route::view('blog_I','front.blog_I');
    Route::view('blog_II','front.blog_II');