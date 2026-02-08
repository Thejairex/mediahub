<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $fillable = [
        'user_id',
        'key',
        'value',
    ];

    protected $casts = [
        'value' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function get(string $key, $default = null)
    {
        return $this->where('key', $key)->first()->value ?? $default;
    }

    public function set(string $key, $value)
    {
        return $this->where('key', $key)->first()->update(['value' => $value]);
    }
}
