<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\OrderItem;
use App\Contact;
use Illuminate\Support\Facades\DB;
use App\OrderState;
use Eloquent\Collection;
use App\Transaction;
use App\Notification;
class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        Auth::user()->type() =="Customer" ? $orders = Auth::user()->orders->where('state','!=',NULL) : $orders = $this->findShopOrders();
        $orderStatus = new OrderState();
        return view('ucp.order.index',compact('orders','orderStatus'));
    }

    public function findShopOrders()
    {
        $shops = Auth::user()->shops;
        $orders = collect();
        foreach($shops as $shop)
        {
            foreach($shop->orders as $order) $orders->push($order);
        }
        return $orders;
    }
    
    public function state($orderid,$state)
    {
        $order = Order::findOrFail($orderid);
        $order->update([
            "state" => $state
        ]);
        $order->save();
        
        switch($state)
        {
            case OrderState::ORDER_FINISHED: //客户收到菜后
            {
                $this->createTransaction($orderid);
                $notify = Notification::create([
                    'receiver_id' => Auth::user()->id,
                    'sender_id' => $order->user_id,
                    'title' => 'Order (ID: '.$orderid.") is completed !",
                    'body' => 'Congratulations! your order is comfirmed by customer, this means they got their food!'
                ]);
                $notify->save();
                return redirect()->route("ucp.transaction.index");
                break;
            }
            case OrderState::ORDER_INDELIVER: //确认Delivery
            {
                $notify = Notification::create([
                    'receiver_id' => $order->user_id,
                    'sender_id' => Auth::user()->id,
                    'title' => 'Your order (ID: '.$orderid.") is now on delivery !",
                    'body' => 'Your is now on delivery, this means the resturant has send your food to the delivery man, please be patient.'
                ]);
                $notify->save();
                break;
            }
            case OrderState::ORDER_SHOPCOMFIRMED: //商家确认订单后
            {
                $notify = Notification::create([
                    'receiver_id' => $order->user_id,
                    'sender_id' => Auth::user()->id,
                    'title' => 'Your order (ID: '.$orderid.") is comfirmed by seller !",
                    'body' => 'Your order is now comfirmed, the resturant will send your food to the delivery soon! be patient.'
                ]);
                $notify->save();
                break;
            }
            case OrderState::ORDER_CANCELEDBYSELLER: //商家取消
            {
                $notify = Notification::create([
                    'receiver_id' => $order->user_id,
                    'sender_id' => Auth::user()->id,
                    'title' => 'Opps, Your order (ID: '.$orderid.") is canceled by seller",
                    'body' => 'Your order is cancaned by resturant, this means the resturant owner has reject your order request, if you have any issue, please contact them.'
                ]);
                $notify->save();
                break;
            }
            return $this->index();
        }

    
        return $this->show($orderid);
    }
    
    public function createTransaction($orderid)
    {

        $order = Order::find($orderid);
       
        $shop = $order->shop;
    
        $orderitms = $order->orderItems;
        $user = Auth::user();

        //处理 Transaction
        $trans = $user->transactions()->create([
            "cust_cont_address" => $order->delivery_address,
            "cust_phone" => $order->customer_phone,
            "cust_name" => $order->delivery_address,
            "shop_name" => $shop->shop_name,
            "shop_address" => $shop->shop_street_number.", ".$shop->shop_street.", ".$shop->shop_city.", ".$shop->shop_state.", ".$shop->shop_zipcode,
            "shop_phone" =>  $shop->shop_phone,
            "note" => $order->note
        ]);

        //处理 Transaction item
        foreach($orderitms as $item)
        {
            $trans->transactionItems()->create([
                "dish_name" => $item->dish->dishName,
                "dish_price" => $item->dish->price,
            ]);

        }
        //创建ShopSell
        $trans->shopSells()->create([
            "shop_id" => $order->shop_id
        ]);

        //最后删除Order ?
        foreach($order->orderItems as $itm)
        {
            $itm->delete();
        }
        $order->delete();

    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($orderId)
    {
       
        $order = Order::findOrFail($orderId);

        $totalPrice = 0;
        
        foreach($order->orderItems as $orderItem)
        {
            $totalPrice += $orderItem->dish->price;
        }
        $orderStatus = new OrderState();
        return view('ucp.order.manage',compact('order','totalPrice','orderStatus'));
    
    }


    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    /*
    ///////////////////////////// MLS //////////////////////////////
    public function index()
    {
        //获取当前用户的店铺     
        $user = Auth::user();
        $shops=$user->shops;

        $shop_tmp=array();
        foreach($shops as $shop)
        {
            $shop_tmp[]= $shop->id;
        }
 
        if(!empty($shop_tmp)) {
            $orders = Order::where('user_id',Auth::user()->id)->orWhereIn('shop_id', $shop_tmp)->get();
        } else {
            $orders = Order::where('user_id',Auth::user()->id)->get();
        }
        //调用订单列表内容
         
        return view('ucp.order.index',compact('orders'));
    }

    public function update(Request $request, $id)
    {
        
        
        $order=Order::find($id);
        
        $order->status = $request->input('status'); 
        //获取数据

        //if ($order -> status =='complete')
        //创建交易语句
        
        if ($order->save()) {
            return redirect('ucp/order');
            //保存数据


        } else {
            return back()->withInput()->withErrors('error');
        }
    }

    ///////////////////////////// END //////////////////////////////
       
    */


}
