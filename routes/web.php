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

Auth::routes();
Route::get('/', function () {
    return view('index');
})->name('index');

Route::group(['middleware'=>'auth'], function(){
    
        //Shop
        Route::resource('ucp/shop','ShopAdminController',[
            'as' => 'ucp'
        ]);
        //Dish
        Route::resource('ucp/shop.dish','DishAdminController',[
            'as' => 'ucp'
        ]);

        //Contact
        Route::resource('ucp/contact','ContactAdminController',[
            'as' => 'ucp'
        ]);
        Route::post('ucp/contact/{id}/default','ContactAdminController@default')->name('ucp.contact.default'); 

        //UCP Home
        Route::get('ucp/index','UcpController@index')->name('ucp.index');
});

//User
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search','SearchController@all')->name('search.all');
Route::resource('shop','ShopController');
