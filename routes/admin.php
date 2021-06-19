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

Route::get('/home', 'HomeController@index')->name('home');

route::get('my',function(){
    return'mohd';
})->name('a');

route::get('mom/{id?}',function (){
   return'hayouma';
})->middleware('auth');

route::get('bob/{id}',function($id){
    return'saleh';
})->name('b');

route::get('admin','UserController@getAdmin');
route::resource('res','ResourceController');

route::group(['namespace'=>'front'],function (){
   route::get('omar','FrontController@getOmar');
    route::get('samer','FrontController@getSamer');
    route::get('ahmad','FrontController@getAhmad');
});
route::group(['prefix'=>'ziad'],function (){
    route::get('age','front\FrontController@getAge');
    route::get('name','front\FrontController@getName');
    route::get('id','front\FrontController@getId');
});
route::get('landing','UserController@getLanding');
