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
<<<<<<< HEAD
=======

>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
        //Order
        Route::resource('ucp/order','OrderAdminController',[
            'as' => 'ucp'
        ]);
<<<<<<< HEAD
=======
        
>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
});
//Order
Route::post('order/add/{shopId}/{dishId}','OrderController@addItem')->name('order.add');
Route::get('order/remove/{id}', 'OrderController@removeItem')->name('order.remove');
Route::get('order/cart', 'OrderController@showCart')->name('order.cart');
Route::post('order/comfirm/{id}', 'OrderController@comfirm')->name('order.comfirm');
Route::post('order/store/{id}', 'OrderController@storeOrder')->name('order.store');


//User
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search','SearchController@all')->name('search.all');
Route::resource('shop','ShopController');
