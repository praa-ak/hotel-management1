<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantBilling extends Model
{
    protected $fillable = [
        'order_id',
        'discount',
        'total_amount',
        'payment_method',
        'payment_status',
    ];
}
