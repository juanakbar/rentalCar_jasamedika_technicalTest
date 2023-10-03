<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    protected $fillable = ['car_name', 'year', 'license_plat', 'price', 'type', 'brand_id', 'available'];
    protected $primaryKey = 'car_id';
    use SoftDeletes;
    protected $dates = ['delete_at'];
}
