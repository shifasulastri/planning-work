<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanSubkon extends Model
{
    protected $fillable = [
        'procurement_subkon',
        'vendor_subkon',
        'description_service_subkon',
        'volume_subkon',
        'units_subkon',
        'total_subkon',
    ];
}
