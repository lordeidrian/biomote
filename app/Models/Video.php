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
        parse_str(parse_url($url, PHP_URL_QUERY), $args);
        
        if (isset($args['v'])) {
            return $args['v'];
        }

        // Handle short URLs like youtu.be/ID
        if (strpos($url, 'youtu.be') !== false) {
             $path = parse_url($url, PHP_URL_PATH);
             return substr($path, 1);
        }
        
        return null;
    }
}
