<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderItem;
use App\Contact;
use DB;
use App\OrderState;
use App\Notification;

class OrderController extends Controller
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

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function comfirm($orderId)
    {

        //SELECT count(`order_id`) as 'qty' FROM `order_items` WHERE `dish_id` = 1 GROUP BY `dish_id`,`shop_id`

        $orderItems = OrderItem::where('order_id',$orderId)->groupBy('dish_id','shop_id')->get();
        $order = Order::find($orderId);
        $contacts = Contact::where('user_id',Auth::user()->id)->get();

        $total_price = 0;
        
        foreach($orderItems as $orderItem)
        {
            $total_price+= $orderItem->dish->price;
        }

        return view('order.confirm',compact('order','orderItems','total_price','contacts'));
        //return $order->orderItemsQty;
        
    }
    public function storeOrder(Request $request,$orderId)
    {
        $order = Order::find($orderId);
        $con = Contact::find($request->selected_address);
        $order->update([
            "delivery_address" => $con->cont_street_number.", ".$con->cont_street.", ".$con->cont_state.", ".$con->cont_zipcode,
            "delivery_contact" => $con->cont_firstname." ".$con->cont_lastname,
            "customer_phone" => $con->cont_phone,
            "note" => $request->note,
            "state" => OrderState::ORDER_COMFIRMED
        ]);
        //最后创建私信给通知店家

        $notify = Notification::create([
            'receiver_id' => $order->shop->user_id,
            'sender_id' => Auth::user()->id,
            'title' => 'You have a new order from '.Auth::user()->name,
            'body' => 'You got a new order, please check in your order management,new order id: '.$orderId
        ]);
        $notify->save();

        //return $order;
        return view('order.secuess');
    }

    public function addItem (Request $req,$shopId,$dishId){
    
        $order = Order::where('user_id',Auth::user()->id)->where('shop_id', $shopId)->where('state', NULL)->first();
    
        if(!$order)
        {
            $order =  new Order();
            $order->user_id=Auth::user()->id;
            $order->shop_id = $shopId;
            $order->save();
        }
    
        $orderItem  = new Orderitem();
        $orderItem->dish_id=$dishId;
        $orderItem->shop_id=$shopId;
        $orderItem->order_id = $order->id;
        $orderItem->save();
    
        //return redirect('/cart');
        return back();
    }
    public function showCart(){
        $orders = Order::where('user_id',Auth::user()->id)->where("state",NULL)->get();

        /*
        if(!$order){
            $order = new Order();
            $order->user_id=Auth::user()->id;
            $order->save();
        }

        $items = $order->orderItems;
 
        
        /*
        foreach($items as $item){
            $total+=$item->dish->price;
        }
        */
        //return $order;
        return view('order.cart',compact('orders'));
    }

    public function removeItem($id){

        
        $orderItem = OrderItem::where('id', $id)->first();

        if(OrderItem::where('shop_id', $orderItem->shop_id)->where('order_id', $orderItem->order_id)->count() == 1)
        {
            $orderItem->order->delete();
        }

        OrderItem::destroy($id);
        /*

        if(!OrderItem::where('id', $id)->count()){
            
        }
        */
        //return redirect('/cart');
        //return OrderItem::where('shop_id', $orderItem->shop_id)->count();
        //return OrderItem::where('shop_id', $orders->shop_id)->count();
        return back();
    }

 

}
