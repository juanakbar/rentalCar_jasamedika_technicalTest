<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['license_id', 'name', 'dob', 'phone', 'address', 'gender'];
    protected $primaryKey = 'client_id';
}
