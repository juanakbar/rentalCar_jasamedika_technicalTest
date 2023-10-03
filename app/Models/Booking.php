<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['booking_code', 'order_date', 'duration', 'return_date_supposed', 'return_date', 'price', 'status', 'fine', 'employees_id', 'client_id', 'car_id'];
    protected $primaryKey = 'booking_id';
    protected $dates = ['deleted_at'];
}
