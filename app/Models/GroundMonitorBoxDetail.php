<?php

namespace App\Models;

use App\Models\User;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroundMonitorBoxDetail extends Model implements Auditable
{
    use HasFactory, LogsActivity,\OwenIt\Auditing\Auditable;

    protected $connection = 'mysql_esd';

    protected $fillable = [
        'ground_monitor_box_id',
        'area',
        'location',
        'g1',
        'g2',
        'remarks',
    ];

    public function groundMonitorBox()
    {
        return $this->belongsTo(GroundMonitorBox::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly([
            'ground_monitor_box_id',
            'area',
            'location',
            'g1',
            'g2',
            'remarks'
        ]);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who last updated the transaction.
     */
    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Boot method to attach model events.
     */
    protected static function boot()
    {
        parent::boot();

        // Set the creator on creating event
        static::creating(function ($model) {
            $model->created_by = Auth::id();
        });

        // Set the updater on updating event
        static::updating(function ($model) {
            $model->updated_by = Auth::id();
        });
    }
}
