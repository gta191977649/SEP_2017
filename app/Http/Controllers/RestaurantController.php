<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tpView()
    {
        //
        $user = Auth::user();
        $r1 = $user->restaurants;
        return view('viewR', compact('r1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createR');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Restaurant::create([
            "name" => $request->name,
            "description" => $request->description,
            "contactNumber" => $request->contactNumber,
            "shopImage" => $request->shopImage,
            "user_id" => Auth::user()->id,

        ]);
        
        return view('restauranthome');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = Auth::user();
        $res = $user->restaurants->find($id);
        return view('editR',compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Restaurant::find($id)->update([
            "name" => $request->name,  
            "description" => $request->description,
            "contactNumber" => $request->contactNumber,
            "shopImage" => $request->shopImage,
            "user_id" => Auth::user()->id,
        ]);
        return view('restauranthome');
    }

    public function tpRestaurant(){
        return view('restauranthome');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
  
    public function destroy($id)
    {
           Restaurant::find($id)->delete();
           return view('restauranthome');
        
    }   


}
    