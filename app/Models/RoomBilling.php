<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomBilling extends Model
{
    protected $fillable = [
        'checkin_id',
        'discount',
        'total_amount',
        'payment_method',
        'payment_status',
    ];
}
