<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanBarang extends Model
{
    use HasFactory;protected $fillable = [
        'procurement',
        'vendor',
        'description_service',
        'volume',
        'units',
        'total',
    ];
}
