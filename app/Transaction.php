<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Transaction extends Model
{
    protected $fillable=['user_id', 'cust_cont_address', 'cust_phone', 'cust_name', 'shop_name', 'shop_address', 'shop_phone','note'];


    public function owner(){
        return $this->belongsTo('App\User');
    }

    public function feedback(){
        return $this->hasOne('App\Feedback');
    }

    public function transactionItems(){
        return $this->hasMany('App\TransactionItem');
    }

    public function shopSells(){
        return $this->hasOne('App\ShopSell');
    }

    public function isRate()
    {
        return DB::table('feedbacks')->where('transaction_id',$this->id)->count();
    }

}
