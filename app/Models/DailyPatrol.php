<?php

namespace App\Models;

use App\Models\User;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Activitylog\Traits\LogsActivity;
use EightyNine\Approvals\Models\ApprovableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Parallax\FilamentComments\Models\Traits\HasFilamentComments;

class DailyPatrol extends Model implements Auditable
{
    use HasFactory, LogsActivity, HasFilamentComments, \OwenIt\Auditing\Auditable;

    // protected $connection = 'mysql';

    protected $fillable = [
        'description_problem',
        'area',
        'location',
        'status',
        'photo_before',
        'photo_after',
        'corrective_action',
        'date_corrective',
        'status'
    ];

    public function getPhotoBeforeUrlAttribute()
    {
        return Storage::url($this->photo_before);
    }

    public function getPhotoAfterUrlAttribute()
    {
        return Storage::url($this->photo_after);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['description_problem', 'area', 'location', 'photo_before', 'photo_after', 'corrective_action', 'date_corrective', 'status']);
    }

    public function toDatabase(DailyPatrol $notifiable): array
    {
        return Notification::make()
            ->title('Saved successfully')
            ->getDatabaseMessage();
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
