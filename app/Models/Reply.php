<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable = [
        'description', 'ticket_id', 'admin_id',
    ];

    // رابطه یک به چند با تیکت
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    // رابطه یک به چند با ادمین
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
