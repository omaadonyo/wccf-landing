<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ContentSection extends Model
{
    protected $fillable = ['page', 'section_key', 'type', 'value'];

    protected function casts(): array
    {
        return [
            'value' => 'string',
        ];
    }

    public static function get($page, $sectionKey, $default = '')
    {
        return Cache::remember("content.{$page}.{$sectionKey}", 3600, function () use ($page, $sectionKey, $default) {
            return static::where('page', $page)
                ->where('section_key', $sectionKey)
                ->value('value') ?? $default;
        });
    }

    public static function getSection($page, $sectionKey, $default = '')
    {
        return static::get($page, $sectionKey, $default);
    }

    public static function getPage($page)
    {
        return Cache::remember("content.page.{$page}", 3600, function () use ($page) {
            return static::where('page', $page)
                ->pluck('value', 'section_key')
                ->toArray();
        });
    }

    public static function set($page, $sectionKey, $value, $type = 'text')
    {
        static::updateOrCreate(
            ['page' => $page, 'section_key' => $sectionKey],
            ['value' => $value, 'type' => $type]
        );
        Cache::forget("content.{$page}.{$sectionKey}");
        Cache::forget("content.page.{$page}");
    }

    public static function flushPage($page)
    {
        $sections = static::where('page', $page)->pluck('section_key');
        foreach ($sections as $key) {
            Cache::forget("content.{$page}.{$key}");
        }
        Cache::forget("content.page.{$page}");
    }
}
