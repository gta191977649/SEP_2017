<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Shop;

class SearchController extends Controller
{
    public function all(Request $req)
    {   
        $keyword = $req->keyword;
        $result_shop = Shop::where('shop_name', 'LIKE','%'.$req->keyword.'%')->get();
        $result_dish = Dish::where('dishName', 'LIKE','%'.$req->keyword.'%')->get();
        return view('search/all/index',compact('result_shop','result_dish','keyword'));
    }
}
