<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'admin_id',
    ];

    // رابطه یک به چند با تیکت‌ها
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    // رابطه یک به چند با ادمین
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
