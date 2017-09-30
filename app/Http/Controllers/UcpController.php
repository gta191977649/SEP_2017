<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UcpController extends Controller
{
    //
    public function index()
    {
        return view('ucp/index');
        //return DB::table('transactions')->where('user_id',Auth::user()->id)->groupBy('shop_name')->distinct()->get();
    }

    public function test()
    {
        return "你好未来，去你妈现在！";
    }

}
