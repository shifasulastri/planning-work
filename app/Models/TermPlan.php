<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermPlan extends Model
{
    protected $fillable = [
        'term_type',
        'value_term',
        'value_rp_term',
        'month_plan',
        'option_available',
    ];
}
