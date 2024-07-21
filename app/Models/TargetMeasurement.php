<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetMeasurement extends Model
{
    use HasFactory;

    protected $connection = 'mysql_esd';

    protected $fillable = [
        'measurement_type',
        'target',
        'actual',
        'percent',
        'week',
        'date_from',
        'date_until',
        'year',
    ];
    
}
