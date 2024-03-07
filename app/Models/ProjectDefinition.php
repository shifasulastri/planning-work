<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDefinition extends Model
{
    protected $fillable = [
        'name_project',
        'code_project',
        'contract_value',
        'bussines_line',
        'date',
        'status',
        'source_ofFunds',
        'schema_bussines',
        'contract_duration',
        'warranty_period',
    ];
}
