<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Shop;

class ShopAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $shops=$user->shops;
        return view('ucp/shop/index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ucp/shop/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prefix = "/uploads/";
        $dataInput = $request->all();

        $user = Auth::user();
        $shop = $user->shops()->create($dataInput);

                
        if($request->hasFile('shop_pic'))
        {
            $uploadFile = $request->file('shop_pic');
            $unique_name = md5($uploadFile->getClientOriginalName().time());
            
            $filename = $unique_name.".".$uploadFile->getClientOriginalExtension();
            $uploadFile->move('uploads', $filename);

    
            $shop->update([
                'shop_pic' => $prefix.$filename,
            ]); 
        }
        return redirect('/ucp/shop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = shop::findOrFail($id);
        $dishs = $shop->dishs;
        return view('ucp/dish/index', compact('dishs', 'shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $shop = $user->shops()->find($id);
        return view('ucp/shop/edit')->with('shop', $shop);
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
        $user = Auth::user();
        $shop=$user->shops()->find($id);
        $shop->update($request->all());

        if($request->hasFile('shop_pic'))
        {
            $prefix = "/uploads/";
            $uploadFile = $request->file('shop_pic');
            $unique_name = md5($uploadFile->getClientOriginalName().time());
            
            $filename = $unique_name.".".$uploadFile->getClientOriginalExtension();
            $uploadFile->move('uploads', $filename);

            $user = Auth::user();
            $shop->update([
                'shop_pic' => $prefix.$filename,
            ]);

        }

 
        return redirect('ucp/shop');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        $shop=Shop::where('id', $id)->first();
        $shop->delete();
        return redirect('ucp/shop');
    }
}
