<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    protected $fillable = [
        'user_id',
        'media_item_id',
        'activity_type',
        'description',
        'old_value',
        'new_value',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function mediaItem(): BelongsTo
    {
        return $this->belongsTo(MediaItems::class, 'media_item_id');
    }

    public function getFormattedTimeAttribute(): string
    {
        $diff = $this->created_at->diffForHumans();
        return $diff;
    }
}
