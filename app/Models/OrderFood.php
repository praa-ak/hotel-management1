<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderFood extends Model
{
    protected $fillable = [
       'order_id',
       'food_id',
       'quantity',
       'price',
       'notes',

    ];
}
