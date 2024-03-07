<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scope extends Model
{
    protected $fillable = [
        'technical_requirements',
        'perfomance_requirements',
        'bussines_requirements',
        'regulatory_requirements',
        'user_requirements',
        'system_requirements',
    ]; 
}
