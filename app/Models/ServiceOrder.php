<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'service_id',
        'delivery_date',
        'order_date',
        'fleet_id',
        'maintenance_type_id'
    ];
}
