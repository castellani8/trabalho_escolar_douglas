<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'fleet_id',
        'service_desc',
        'service_type_id',
        'maintenance_type_id',
    ];
}
