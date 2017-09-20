<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Shop;

class SearchController extends Controller
{
    public function all()
    {   
        return view('search/all/index');
    }
}
