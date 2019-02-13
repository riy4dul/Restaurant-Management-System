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

// Route::get('/', function () {
//     return view('frontend.home');
// });

Route::get ('/',[
    'uses'=> 'frontend\HomeController@index',
    'as'=>'/'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
	
});

Route::group(['middleware' =>'auth' , 'namespace' => 'backend'], function(){
	Route::resource('slider','SliderController');
	Route::resource('category','CategoryController');
	Route::resource('item','ItemController');

	Route::get('reservation','ReservationController@index')->name('reservation.index');
	Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});

Route::post ('/reservation',[
    'uses'=> 'frontend\ReservationController@reserve',
    'as'=>'reservation.reserve'
]);

Route::post('/contact','frontend\ContactController@sendMessage')->name('contact.send');
