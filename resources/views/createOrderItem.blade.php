    <form action="{{route('orderItem.store')}}" method="POST">
    	{{ csrf_field() }}

        <input class="form-control", placeholder="orderItemName" name="orderItemName"> 
        <input class="form-control", placeholder="orderItemPic" name="orderItemPic"> 
        <input class="form-control", placeholder="orderItemQty" name="orderItemQty"> 
        <input class="form-control", placeholder="price" name="price"> 
        
        
        <input type="hidden" name="order_id" value="0">
        <input type="hidden" name="shop_id" value="0">
        <input type="hidden" name="dish_id" value="0">

        <input class="btn btn-primary" type="submit" value ="Create">
    </form>