<?php

namespace App\Models;

use App\Models\User;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flooring extends Model implements Auditable
{
    use HasFactory, LogsActivity, \OwenIt\Auditing\Auditable;

    protected $fillable = ['register_no', 'area', 'location'];

    protected $connection = 'mysql_esd';

    public function flooringDetails()
    {
        return $this->hasMany(FlooringDetail::class);
    }

    public function getJudgementCountsAttribute()
    {
        $okCount = FlooringDetail::where('flooring_id', $this->id)->where('judgement', 'OK')->count();
        $ngCount = FlooringDetail::where('flooring_id', $this->id)->where('judgement', 'NG')->count();

        return [
            'ok' => $okCount,
            'ng' => $ngCount
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['register_no', 'area', 'location']);
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
