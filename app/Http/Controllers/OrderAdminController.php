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
class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

        Auth::user()->type() =="Customer" ? $orders = Auth::user()->orders : $orders = $this->findShopOrders();
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
        $order = Order::find($orderid);
        $order->update([
            "state" => $state
        ]);
        $order->save();
        return $this->show($orderid);
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
       
        $order = Order::find($orderId);

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
