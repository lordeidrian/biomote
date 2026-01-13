<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'youtube_url',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getYoutubeIdAttribute()
    {
        $url = $this->youtube_url;
        
        // Handle standard watch URLs: youtube.com/watch?v=ID
        parse_str(parse_url($url, PHP_URL_QUERY), $args);
        if (isset($args['v'])) {
            return $args['v'];
        }

        // Handle short URLs: youtu.be/ID
        if (strpos($url, 'youtu.be') !== false) {
             $path = parse_url($url, PHP_URL_PATH);
             return trim($path, '/');
        }

        // Handle YouTube Shorts: youtube.com/shorts/ID
        if (preg_match('/youtube\.com\/shorts\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return $matches[1];
        }

        // Handle embed URLs: youtube.com/embed/ID
        if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return $matches[1];
        }

        // Handle /v/ URLs: youtube.com/v/ID
        if (preg_match('/youtube\.com\/v\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
            return $matches[1];
        }
        
        return null;
    }
}
