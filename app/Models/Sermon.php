<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    /** @use HasFactory<\Database\Factories\SermonFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'speaker',
        'audio_url',
        'video_url',
        'image',
        'sermon_date',
        'content',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'sermon_date' => 'date',
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
