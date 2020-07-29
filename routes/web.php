<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rules', function () {
    return view('Rules');
});
Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/specials', function () {
    return view('Specials');
});


Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('/categories', function () {
    return view('admin.category');
});
Route::get('/role-register','Admin\DashboardController@registered');

Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

Route::get('/dashboard', function(){
      return view('admin.dashboard');
      });

Route::get('/createbookings', function(){
      return view('admin.createbookings');
      });

Route::get('/customerlist', function(){
      return view('admin.customerlist');
      });

Route::get('/rooms', function(){
      return view('admin.createrooms');
      });
Route::get('/service', function(){
      return view('admin.service');
      });

      Route::get('/categories','Admin\CategoryController@index');
      Route::post('/add-category', 'Admin\CategoryController@store');
      Route::delete('/category-delete/{id}','Admin\CategoryController@destroy');
      Route::get('/editcategory/{id}','Admin\CategoryController@edit');
      Route::put('/editcategory-update/{id}','Admin\CategoryController@update');

      Route::get('/rooms','Admin\RoomController@index');
      Route::post('/add-rooms', 'Admin\RoomController@store');
      Route::delete('/room-delete/{id}','Admin\RoomController@destroy');
      Route::get('/editrooms/{id}','Admin\RoomController@edit');
      Route::put('/editrooms-update/{id}','Admin\RoomController@update');

      Route::get('/bookings','Admin\BookingController@index');
      Route::post('/add-bookings','Admin\BookingController@store');
      Route::delete('/booking-delete/{id}','Admin\BookingController@destroy');
      Route::get('/editreservations/{id}','Admin\BookingController@edit');
      Route::get('/updatereservation/{id}','Admin\BookingController@update');

      

      Route::get('/service','Admin\ServiceController@index');
       Route::post('/add-services','Admin\ServiceController@store');
       Route::delete('/service-delete/{id}','Admin\ServiceController@destroy');
});

