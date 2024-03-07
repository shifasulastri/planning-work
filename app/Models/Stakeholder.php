<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stakeholder extends Model
{
    protected $fillable = [
        'stakeholder',
        'role',
        'power',
        'interest',
        'initiation',
        'planning',
        'executing',
        'control',
        'close',
        'engagement_level',
    ];
}
