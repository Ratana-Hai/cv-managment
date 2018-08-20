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
    return redirect('login');
});
Route::get('/logout',function(){
   Auth::logout();
   return redirect('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/grade', 'GreetingController@index')->name('grade');
Route::post('search/army', 'GreetingController@searchArmy')->name('search/army');
Route::post('upgrade/army', 'GreetingController@upGrade');



Route::post('/upload', 'ImageProfileController@createImage');
Route::resource('/armies','ArmiesController');
