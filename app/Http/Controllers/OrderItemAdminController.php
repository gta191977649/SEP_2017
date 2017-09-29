<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Shop;
use App\OrderItem;
class OrderIremAdminController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //
 
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create($shop,$dish){
        return view('ucp/orderItem/create',compact('shop','dish'));
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request,$shop_id,$dish_id)
     {
         //
         $orderItems = $request->all();
         //print_r($data);
         $Shop = Shop::find($shop_id);
         $Dish = Dish::find($dish_id);
         $Shop->$Dish->orderItems()->create($$orderItems);
         
         //return
         return redirect()->route('ucp.order.show', compact('order_id','shop_id','dish_id'));
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
         
         $orderItem = OrderItem::find($id);
         //return $data;
         return view('ucp/orderItem/index',compact('orderItem'));
     }
 
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($shop_id,$dish_id,$orderItem_id)
     {
        
        $Shop = Shop::find($shop_id);
        $Dish = Dish::find($dish_id);
        $orderItem = $Shop->$Dish->orderItems()->find($orderItem_id);
        
        return view('ucp/orderItem.edit')->with('orderItem', $orderItem);
         
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request,$shop_id, $dish_id,$orderItem_id)
     {
         
        $Shop = Shop::find($shop_id);
        $Dish = Dish::find($dish_id);
        $orderItem = $Shop->$Dish->orderItems()->find($orderItem_id);
        $orderItem->update($request->all());
  
        return redirect()->route('ucp.order.show', compact('order_id','shop_id','dish_id'));
         //return $request->all();
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($shop_id, $dish_id,$orderItem_id)
     {
        $Shop = Shop::find($shop_id);
        $Dish = Dish::find($dish_id);
        $orderItem = $Shop->$Dish->orderItems()->find($orderItem_id);
        $orderItem->delete();
        return back();
     }
}