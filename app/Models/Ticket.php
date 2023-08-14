<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','status', 'attachment', 'user_id', 'admin_id' , 'department_id'];

    // رابطه یک به چند با کاربر
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // رابطه یک به چند با ادمین
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // رابطه یک به چند با بخش
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // رابطه یک به چند با پاسخ‌ها
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
