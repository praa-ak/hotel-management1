<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomCheckin extends Model
{
    protected $fillable = [
        'room_id',
        'checkin_id',
        'assigned_date',
        'vacated_date',
    ];
}
