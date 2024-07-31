<?php

namespace App\Models;

use App\Models\User;
//use OwenIt\Auditing\Auditable;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EquipmentGround extends Model implements Auditable
{
    use HasFactory, LogsActivity, \OwenIt\Auditing\Auditable;

    protected $connection = 'mysql_esd';

    protected $fillable = ['machine_name', 'area', 'location'];

    public function equipmentGroundDetails()
    {
        return $this->hasMany(EquipmentGroundDetail::class);
    }

    public function getJudgementCountsAttribute()
    {
        $okCount = EquipmentGroundDetail::where('equipment_ground_id', $this->id)
                    ->where(function($query) {
                        $query->where('judgement_ohm', 'OK')
                            ->orWhere('judgement_volts', 'OK');
                    })
                    ->count();

        $ngCount = EquipmentGroundDetail::where('equipment_ground_id', $this->id)
                    ->where(function($query) {
                        $query->where('judgement_ohm', 'NG')
                            ->orWhere('judgement_volts', 'NG');
                    })
                    ->count();

        return [
            'ok' => $okCount,
            'ng' => $ngCount,
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['machine_name', 'area', 'location']);
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
