
@extends('layouts.base') 
@section('main')


<div class="container-fluid" id="bk" style="margin-top: -20px;">
<div class="container">

<div class="row">
    <div class="text-center" style="margin-left: auto; margin-right: auto; margin-top: 100px; margin-bottom: 120px;">

        <h1 class="text-center" style="color:white; font-weight:bold;">Any food, just one search</h1>
        <form id="form_banner" action="{{ route('search') }}" post="get" style="margin-top: 50px; margin-left: 20px; margin-right: 20px;" id="form_banner">
            <div class="row">
                <div class="col-md-2" style="margin: 0px; padding: 0px; margin-top: 5px;">
                    <input href="#" id="noshadow"class="form-control" data-toggle="collapse" data-target="#demo" placeholder="Location" name="area"></input>     
                </div>
                
                <div class="col-md-8" style="margin: 0px; padding: 0px; margin-top: 5px;">
                    <input name="keyword" class="form-control" placeholder="Search any food / shop you want"/>
                </div>
                <div class="col-md-2" style="margin: 0px; padding: 0px; margin-top: 5px;">
                    <button class="btn btn-primary" style="width: 100%;" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
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

        <div class="text-center" style="margin-top: 100px; " >
            <h1 class="cover-heading"  style="color:white; font-weight:bold;">Join US</h1>
            <div class="row">
                <div class="col-md-6">
                <h2 class="cover-heading"  style="color:white;">User</h2>
                <p class="lead">I'm a customer, i just want to use this system.</p>
                <p class="lead">
                <a href="{{ route('register') }}" class="btn btn-primary" id="form_banner">Register</a>
                </p>
                </div>
                <div class="col-md-6">
                <h2 class="cover-heading"  style="color:white;">Shop Owner</h2>
                <p class="lead">I'm a shop owner, i want to open my shop in this system.</p>
                <p class="lead">
                <a href="{{ route('register.shop') }}" class="btn btn-primary" id="form_banner">Register</a>
                </p>
                </div>
            </div>
        </div>


    </div>
</div>

 
</div>
</div>




@endsection
