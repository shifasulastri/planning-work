<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    protected $fillable = [
        'name',
        'position',
        'duration',
        'status',
    ];
}
