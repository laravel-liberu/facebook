<?php

namespace LaravelLiberu\Facebook\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Rememberable\Traits\Rememberable;

class Settings extends Model
{
    use HasFactory, Rememberable;

    protected $table = 'facebook_settings';

    protected $guarded = ['id'];

    protected $casts = [
        'domain_verification' => 'boolean',
    ];

    private static $instance;

    public static function current()
    {
        return self::$instance
            ??= self::cacheGet(1)
            ?? self::factory()->create();
    }
}
