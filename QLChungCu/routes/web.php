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

//trangchu
Route::resource('index','IndexController');
Route::get('/',['as'=>'index','uses'=>'IndexController@index']);

//admin
Route::get('admin_login',['as'=>'dangnhapAdmin','uses'=>'AdminController@index']);
Route::get('dashboard',['as'=>'signin1','uses'=>'AdminController@show_dashboard']);
Route::post('admin_dashboard',['as'=>'signin','uses'=>'AdminController@dashboard']);
Route::get('logout',['as'=>'signout','uses'=>'AdminController@logout']);


//Authentication
Route::get('register_auth',['as'=>'dangkiAuth','uses'=>'AuthController@register_auth']);
Route::post('register',['as'=>'dangkiAuth','uses'=>'AuthController@register']);



Route::get('login_auth',['as'=>'dangnhapAuth','uses'=>'AuthController@login_auth']);
Route::post('auth_login',['as'=>'dangnhapAuth','uses'=>'AuthController@auth_login']);
Route::get('/logout_auth','AuthController@logout_auth');
//User 
//neu dung rieng middleware
//Route::get('user','UserController@index')->middleware('auth.roles');
//dung trong group
//Route::group(['middleware'=>'auth.roles','auth.roles'=>['admin','author']],function(){......});

Route::get('user','UserController@index')->middleware('auth.roles');
Route::get('add_users','UserController@add_user')->middleware('auth.roles');
Route::post('store_user','UserController@store_user');
Route::post('assign_roles','UserController@assign_roles')->middleware('auth.roles');

Route::get('delete_user_roles/{admin_ID}','UserController@delete_user_roles')->middleware('auth.roles');


