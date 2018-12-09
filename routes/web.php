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

//frontend site................................................
route::get('/','HomeController@index');










//backend site...............................................
route::get('logout','SuperAdminController@logout');
route::get('/admin','AdminController@index');
route::get('/dashboard','AdminController@show_dashboard')->name('dashboard');
route::post('/admin-dashboard','AdminController@dashboard');




//category related route........................................
route::get('/add-category','CategoryController@index');
route::get('/all-category','CategoryController@all_category');
route::post('/save-category','CategoryController@save_category')->name('save');
