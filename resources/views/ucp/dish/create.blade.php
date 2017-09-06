@extends('template/base')
@section('body')
    <form action="{{route('dish.store')}}" method="POST">
    	{{ csrf_field() }}

        <input class="form-control", placeholder="Name" name="dishName"> 
        <input class="form-control", placeholder="dishPic" name="dishPic"> 
        <input class="form-control", placeholder="price" name="price"> 
        <input type="hidden" name="avaible" value="1">
        <input type="checkbox" name="avaible" value="0">
        

        <input type="hidden" name="shop_id" value="0">

        <input class="btn btn-primary" type="submit" value ="Create">
    </form>
@endsection