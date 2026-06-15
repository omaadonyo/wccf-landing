<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    /** @use HasFactory<\Database\Factories\ResourceFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'file_url',
        'external_link',
        'image',
        'is_active',
        'downloads',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'downloads' => 'integer',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}
