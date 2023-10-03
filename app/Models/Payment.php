<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $fillable = ['type', 'amount', 'date', 'client_id', 'employees_id', 'booking_code'];
    protected $primaryKey = 'payment_id';
    protected $dates = ['deleted_at'];
    protected $table = 'payments';
}
