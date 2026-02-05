<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaItems extends Model
{
    protected $table = 'media_items';

    protected $fillable = [
        'name',
        'type',
        'status',
        'progress_current',
        'progress_total',
        'notes',
        'source',
        'source_url',
        'image_url',
        'user_id',
    ];

    public $statusNice = [
        'watching' => 'Watching',
        'completed' => 'Completed',
        'on_hold' => 'On Hold',
        'dropped' => 'Dropped',
        'plan_to_watch' => 'Plan to Watch',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
