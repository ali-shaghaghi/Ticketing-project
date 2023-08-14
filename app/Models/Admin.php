<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'department_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    // رابطه یک به چند با تیکت‌ها
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    // رابطه یک به چند با پاسخ‌ها
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    // رابطه یک به چند با پاسخ‌ها
    public function departments()
    {
        return $this->hasMany(Department::class);
    }

}
