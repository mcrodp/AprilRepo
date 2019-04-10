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

//Route::get('/', function () {
 //   return view('welcome');
//});



Route::get('/about', function(){
    return view('page1.about');
});

Route::get('/profile',function(){
    return view('page1.profile');
});

Route::get('/contact',function(){
    return view('page1.contact');
});

Route::get('/{id}','MyController1@show_front');
    
Route::get('/', function(){
  return view('page1.front');
});

Route::get('/otherpage/{id}/{name}/{pw}','MyController1@just_show');



