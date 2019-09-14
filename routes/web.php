<?php


// Route::get('/', function (){
//   return view('welcome');
// });

Route::get('/front', function (){
  return view('FrontPage');
});

Route::get('/salam', function (){
  return 'Halo Semua!!';
});

Route::get('/teras', function (){
  return view('blog/teras');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');
Route::get('/layout', 'BlogController@layout');

Route::get('/', 'BlogController@home');
Route::get('/partisipan', 'BlogController@partisipan');
Route::get('/kami', 'BlogController@kami');
Route::get('/registrasi', 'BlogController@regist');
Route::post('/registrasi/save', 'BlogController@save');
