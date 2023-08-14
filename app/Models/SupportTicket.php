<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;
    const STATUS_PENDING = 'در انتظار بررسی';
    const STATUS_IN_PROGRESS = 'در حال بررسی';
    const STATUS_ANSWERED = 'پاسخ داده شد';
}
