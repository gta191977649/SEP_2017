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
    return view('index');
})->name('index');


Route::resource('ucp/dish','DishAdminController');
Route::group(['middleware'=>'auth'], function(){
    
        Route::get('/restauranthome/view', 'RestaurantController@tpView')->name('view');
        Route::get('/restauranthome/edit/{id}', 'RestaurantController@edit')->name('edit');
        Route::get('/restauranthome/create', 'RestaurantController@create')->name('create');
        Route::post('/restauranthome/store', 'RestaurantController@store');
        Route::post('/restauranthome/update/{id}', 'RestaurantController@update')->name('update');
        Route::delete('restauranthome/delete/{id}', 'RestaurantController@destroy')->name('delete');
        Route::get('/restauranthome', 'RestaurantController@tpRestaurant');
            
    });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search','SearchController@all')->name('search.all');