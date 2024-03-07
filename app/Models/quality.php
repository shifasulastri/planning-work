<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quality extends Model
{
    protected $fillable = [
        'requirements',
        'category',
    ];
}
