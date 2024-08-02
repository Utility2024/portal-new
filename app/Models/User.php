<?php

namespace App\Models;

use Filament\Panel;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Gate;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Filament\Models\Contracts\FilamentUser;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Solutionforest\FilamentEmail2fa\Trait\HasTwoFALogin;
use Edwink\FilamentUserActivity\Traits\UserActivityTrait;
use Solutionforest\FilamentEmail2fa\Interfaces\RequireTwoFALogin;
use BetterFuturesStudio\FilamentLocalLogins\Concerns\HasLocalLogins;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser, Auditable, RequireTwoFALogin
{
    use HasApiTokens, HasFactory, HasProfilePhoto, Notifiable, TwoFactorAuthenticatable;
    use HasPanelShield, UserActivityTrait, HasLocalLogins, HasRoles;
    use \OwenIt\Auditing\Auditable;
    use HasTwoFALogin;

    const ROLE_SUPERADMIN = 'SUPERADMIN';
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_EDITOR = 'EDITOR';
    const ROLE_USER = 'USER';

    const ROLES = [
        self::ROLE_SUPERADMIN => 'SuperAdmin',
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_EDITOR => 'Editor',
        self::ROLE_USER => 'User',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nik',
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return $this->role === self::ROLE_ADMIN;
        }

        // Allow all roles to access 'esd', 'utility', and 'stock' panels
        if (in_array($panel->getId(), ['esd', 'utility', 'stock'])) {
            return true;
        }

        // Default allow access to other panels (if any)
        return true;
    }

    public function isSuperAdmin()
    {
        return $this->role === self::ROLE_SUPERADMIN;
    }

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isEditor()
    {
        return $this->role === self::ROLE_EDITOR;
    }

    public function isUser()
    {
        return $this->role === self::ROLE_USER;
    }
}
