<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    
    protected $fillable = [
        'shop_id', 'user_id','transaction_id' ,'rate', 'comment'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }    

    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }

}
