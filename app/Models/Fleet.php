<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fleet extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'desc_frota',
        'active',
        'hystory',
        'dt_manut',
        'dt_manut'
    ];
}