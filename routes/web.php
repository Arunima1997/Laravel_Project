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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home','HomeController@index');

Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('home/attendance&{name}','HomeController@attendance')->name('user.login.attendance');
Route::get('home/report&{value}','HomeController@report')->name('attendance.report');
Route::post('home/report_generate&{tabu}','HomeController@report_generate')->name('report.generate');

Route::prefix('admin')->group(function() {
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/','AdminController@index')->name('admin.dashboard');
  Route::get('subject','AdminController@subject')->name('admin.subject');
  Route::get('show','AdminController@show')->name('admin.show');
  
  Route::get('edit&{id}','AdminController@edit');
  Route::post('update&{id}','AdminController@update');
  Route::get('delete&{id}','AdminController@destroy');
  
  Route::post('store','AdminController@store')->name('admin.subject');
  Route::get('upload','AdminController@upload')->name('admin.upload');
  Route::post('import_csv_file_1','AdminController@import_csv_file_1')->name('admin.upload.import');
  Route::post('import_csv_file_2','AdminController@import_csv_file_2')->name('admin.upload.import');
  Route::post('import_csv_file_3','AdminController@import_csv_file_3')->name('admin.upload.import');
  Route::post('import_csv_file_4','AdminController@import_csv_file_4')->name('admin.upload.import');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
