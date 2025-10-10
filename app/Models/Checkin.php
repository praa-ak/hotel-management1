<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = [
        'guest_id',
        'number_of_people0',
        'number_of_nights',
        'advance_payment',
        'total_amount',
        'checkin_date',
        'is_checked_out',
        'checkout_date',
    ];
}
