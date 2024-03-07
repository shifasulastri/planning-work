<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $table = 'risks';

    protected $fillable = [
        'start_date',
        'description_ofrisk',
        'submitter',
        'name_project',
        'probability_factor',
        'impact_factor',
        'exposure',
        'Risk_reponse_type',
        'Risk_reponse_plan',
        'assigned_to',
        'status',
        'due_date',
    ];
}

