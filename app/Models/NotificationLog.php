<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'notification_category_id',
        'notification_type_id',
        'message',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function notificationCategories() {
        return $this->belongsTo(NotificationCategory::class, 'notification_category_id');
    }

    public function notificationTypes() {
        return $this->belongsTo(NotificationTypes::class, 'notification_type_id');
    }
}
