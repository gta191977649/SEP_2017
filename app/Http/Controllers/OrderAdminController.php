<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
use App\OrderState;
=======
>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce

class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
        $orders = Auth::user()->orders->where("state",OrderState::ORDER_COMFIRMED);
        return view('ucp.order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
=======
        return view('ucp.order.index');
    }

 
    public function create()
    {
        //
    }

>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
    public function store(Request $request)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======

>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
    public function show($id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======

>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
    public function edit($id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
    public function update(Request $request, $id)
    {
        //
    }

<<<<<<< HEAD
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======

>>>>>>> 9ae4ee654d5bf1188937325bb164064bd72d0bce
    public function destroy($id)
    {
        //
    }
}
