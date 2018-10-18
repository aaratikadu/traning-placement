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

Route::get('/stud', function () {
    return view('myapp.resume1');
});
Route::get('/view', 'displaycontroller@display');

Route::get('/1', function () {
    return view('myapp.soption');
});
Route::get('/c_details',function()
{
  return view('myapp.company_details');
});
Route::get('/change_pass', function () {
    return view('myapp.change_pass');
});

Route::post('/store','studentcontroller@store');
Route::post('/store1','studentcontroller@store1');
Route::get('/22','displaycontroller@display');

