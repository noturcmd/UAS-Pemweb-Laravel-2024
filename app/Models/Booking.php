<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $table = "bookings";
    protected $fillable = [
        'user_id',
        'ticket_id',
        'passenger_count',
        'total_price',
        'status'
    ];
}
