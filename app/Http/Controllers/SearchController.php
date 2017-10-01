<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Shop;

class SearchController extends Controller
{
    public function search(Request $req)
    {
        /*
        if($req->area && $req->keyword)
        {
            $keyword = $req->keyword;
            $result_shop = Shop::where('shop_name', 'LIKE','%'.$req->keyword.'%')->where('shop_city', 'LIKE', '%'.$req->area)->get();
            $dishes = Dish::join('shops', 'shops.id', '=', 'dishes.id')->where('dishName', 'LIKE','%'.$req->keyword.'%')->where('shop_city', 'LIKE','%'.$req->area.'%')->get();
    
            $result_dish = $dishes;
            return view('search/all/index',compact('result_shop','result_dish','keyword'));
        }
        
        else
        {
            $keyword = $req->keyword;
            $result_shop = Shop::where('shop_name', 'LIKE','%'.$req->keyword.'%')->get();
            $result_dish = Dish::where('dishName', 'LIKE','%'.$req->keyword.'%')->get();
            return view('search/all/index',compact('result_shop','result_dish','keyword'));
        }*/
        $keyword = $req->keyword;
        $result_shop = Shop::where('shop_name', 'LIKE','%'.$req->keyword.'%')->where('shop_city', 'LIKE', '%'.$req->area)->get();
        $dishes = Dish::join('shops','dishes.shop_id' , '=', 'shops.id')->where('dishName', 'LIKE','%'.$req->keyword.'%')->where('shop_city', 'LIKE','%'.$req->area.'%')->get();
        //return $dishes;
        $result_dish = $dishes;
        return view('search/all/index',compact('result_shop','result_dish','keyword','req'));
    }

    

    public function all(Request $req)
    {   

    }

}
