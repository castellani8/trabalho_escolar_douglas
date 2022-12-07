<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Formulary extends Model
{

    use Hasfactory;
    protected $fillable = [
        'company_id',
        'desc_frota',
        'active',
        'hystory',
        'dt_manut',
    ];
    
    protected $fillable = [
        'desc_manut',
    ];

    protected $fillable = [
        'desc_buy',
        'items_quantity',
    ];

    protected $fillable = [
        'service_type_desc',
    ];
    protected $fillable = [
        'fleet_id',
        "service_desc",
        'service_type_id',
        'maintenance_type_id',
    ];
    protected $fillable = [
        'order_date',
        'service_id',
        'delivery_date',
        'order_id',
        'fleet_id',
        'maintenance_type_id',
    ];






}
