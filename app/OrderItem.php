@ -0,0 +1,16 @@
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //  
    protected $fillable = [
         'order_id','shop_id','dish_id','orderItemName','orderItemPic','orderItemQty','price'
    ];

  

}