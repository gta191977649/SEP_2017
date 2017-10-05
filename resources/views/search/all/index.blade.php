@extends('layouts/base')
@section('main')
<div class="container-fluid" id="searchBk" style="margin-top: -20px;">
<div class="container">
    <div class="alert alert-dismissible" id="alertCustom" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Find: {{ $keyword }} on {{$result_shop->count()+$result_dish->count()}} results.
        <p>
        @if($req->area && $req->keyword) 
        
            <span class="badge">{{$req->area}}</span>
            <span class="badge">{{$req->keyword}}</span>
        
        @elseif($req->area)
        
             <span class="badge">{{$req->area}}</span>
        @else 
            <span class="badge">{{$req->keyword}}</span>
        @endif
        </p>
    </div>

    <!-- seacrh -->
    <form action="{{ route('search') }}" post="get">
    
        <div class="row" style="padding: 15px;">
            <div class="col-md-2" style="margin: 0px; padding: 0px;">
                <input href="#" id="noshadow"class="form-control" data-toggle="collapse" data-target="#demo" placeholder="Location" name="area" value="{{ $req->area ? $req->area : "" }}"></input>     
            </div>
            <div class="col-md-8" style="margin: 0px; padding: 0px;">
                <input name="keyword" class="form-control" placeholder="Search any food / shop you want"/>
            </div>
            <div class="col-md-2" style="margin: 0px; padding: 0px;">
                <button class="btn btn-primary" style="width: 100%;" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        Search</button>
            </div>
        </div>
    </form>
    <div id="demo" class="collapse" style="padding-top:10px;">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class="row">
                    @foreach(DB::table('shops')->groupBy('shop_city')->distinct()->get() as $city)
                    
                    <div class="col-md-2"><a href="#" id="loc-{{ $city->shop_city }}" onclick="myFunction_{{ $city->shop_city }}()" >{{$city->shop_city}}</a></div>
                    <script>
                    function myFunction_{{ $city->shop_city }}() {
                        //alert(document.getElementById("loc-{{ $city->shop_city }}").innerHTML);
                        document.getElementById("noshadow").value = document.getElementById("loc-{{ $city->shop_city }}").innerHTML;
                    }
                    </script>
                    @endforeach
                </div>   
                </div>
            </div>
        </div>


    <div class="panel panel-default">
    <div class="panel-body">
    @if($result_shop->count())
        
        <h1>Shop <small>({{ $result_shop->count() }})</small></h1>
        <hr/>
        <div class="row">
            @foreach ($result_shop as $shops)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="{{ route('shop.show',$shops->id) }}" style="color:black;"><img src="{{ $shops->shop_pic }}" ></a>
                        <div class="caption">
                            <h3><a href="{{ route('shop.show',$shops->id) }}" style="color:black;">{{ $shops->shop_name }}</a></h3>  
                            <p>{{ $shops->shop_des }} </p>
                            <h4 class="text-right">{{ $shops->shop_city }}</h4>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    @endif
    
    {{-- DISH --}}
    @if($result_dish->count())
        <h1></span>Dish <small>({{ $result_dish->count() }})</small></h1>
        <hr/>
        <div class="row">
            @foreach ($result_dish as $dishs)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="{{ route('shop.show',$dishs->shop_id) }}" style="color:black;"><img src="{{ $dishs->dishPic }}" ></a>
                        <div class="caption">
                            <h3><a href="{{ route('shop.show',$dishs->shop_id) }}" style="color:black;">{{ $dishs->dishName }} </a></h3>  
                            <p>{{ $dishs->dishDes}} </p>
                            
                            <h4 class="text-right">{{ $dishs->shop->shop_city }}</h4>
                            <h2 class="text-primary">${{ $dishs->price}}</h2>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    @endif
    @if(!$result_dish->count() && !$result_shop->count())
    <div class="text-center" style="padding:100px;">
        <span class="glyphicon glyphicon-remove" style="font-size:100px;" aria-hidden="true"></span>
        <p>Sorry, there is nothing found, try to search something else?</p>
    
    </div>
    @endif
    </div>
    </div>
</div>
</div>
@endsection