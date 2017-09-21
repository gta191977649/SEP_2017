<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'description', 'contactNumber', 'shopImage', 'user_id'
    ];

 }

