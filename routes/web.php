<?php
    use Illuminate\Http\Request;

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

//限制UCP必须要用户登录后才能使用
Route::group(['middleware'=>'auth'],function(){

    
    //DISH
    Route::resource('ucp/shop.dish','DishAdminController',[
        'as' => 'ucp'
    ]);
    //Contact
    Route::resource('ucp/contact','ContactAdminController',[
        'as' => 'ucp'
    ]);
    Route::post('ucp/contact/{id}/default','ContactAdminController@default')->name('ucp.contact.default');
    
    //SHOP
    Route::resource('ucp/shop','ShopAdminController',[
        'as' => 'ucp'
    ]);

    //ORDER
    Route::resource('ucp/order','OrderAdminController',[
        'as' => 'ucp'
    ]);
    
    Route::get('ucp/order/{id}/state/{state}','OrderAdminController@state')->name('ucp.order.state');

    //Transaction
    Route::get('transaction/{orderid}','TransactionController@create')->name('transaction.create');
    
    Route::resource('ucp/transaction','TransactionAdminController',[
        'as' => 'ucp'
    ]);


    Route::get('ucp/test','UcpController@index');
    Route::get('ucp/index','UcpController@index')->name('ucp.index');

   
    Route::get('ucp/notify/','NotificationController@index')->name('ucp.notify.index');
    Route::get('ucp/notify/{id}','NotificationController@view')->name('ucp.notify.view');
    Route::get('ucp/notify/{id}/mark','NotificationController@markRead')->name('ucp.notify.mark');
    

    
    
    
});



//Order
Route::post('order/add/{shopId}/{dishId}','OrderController@addItem')->name('order.add');
Route::get('order/remove/{id}', 'OrderController@removeItem')->name('order.remove');
Route::get('order/cart', 'OrderController@showCart')->name('order.cart');
Route::post('order/comfirm/{id}', 'OrderController@comfirm')->name('order.comfirm');
Route::post('order/store/{id}', 'OrderController@storeOrder')->name('order.store');


Route::resource('shop','ShopController');

//Route::post('order/comfirm/{shop}','OrderController@cofirm')->name('order.comfirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search','SearchController@search')->name('search');
Route::get('/search/all','SearchController@all')->name('search.all');


Route::get('/0xFF',function(Request $request){
    $request->session()->put('style', 'behind_scene');
    return view('index');
});

Route::get('/0x00',function(Request $request){
    $request->session()->forget('style');
    return view('index');
});
