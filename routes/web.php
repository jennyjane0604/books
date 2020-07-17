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

//  Route::get('/', function () {
//      return view('welcome');
//  });

//  Route::get('/','MyController@index');

//  Route::get('/employees/{empid}/name/{lastname}','MyController@getEmployee');

//  Route::get('/form1','MyController@showView');

//  Route::post('/form1',function(){
//      echo 'Form has been clicked.';
//  });

// Route::match(['get','post'],'/testmatch',function(){
//     return view('sample1');
// });


//  Route::any('/testmatch','MyController@testMatch');

// Route::get('/store/{itemcode}/item/{itemname?}',function($itemcode=123, $itemname='none specified'){
//      return 'Product is found is '.$itemcode.' '.$itemname;
// });

//->where(['itemcode'=> '[0-9]+', 'itemname' => '[a-zA-Z]+']);

// Route::post('/param1/param2/param3/param4/param5/param6/param7',function(){
//      return 'Route is triggered.';
// })->name('myurl');


//Route::resource('/','ResourceController');

//Route::get('/list','ResourceController@list');

Route::get('/books/add','BookController@add');
Route::post('/books/add','BookController@store');

Route::get('/books/list','BookController@list');

Route::get('/books/edit/{isbn}','BookController@edit');
Route::post('/books/edit/save','BookController@save');
