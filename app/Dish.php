<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //  
    protected $fillable = [
        'dishName', 'dishPic', 'price', 'shop_id' , 'avaible'
    ];

  

}
