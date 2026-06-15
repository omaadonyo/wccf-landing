<?php

use App\Models\ContentSection;

if (! function_exists('content')) {
    function content(string $page, string $sectionKey, string $default = ''): string
    {
        return ContentSection::get($page, $sectionKey, $default);
    }
}

if (! function_exists('content_image')) {
    function content_image(string $page, string $sectionKey, string $default = ''): string
    {
        $val = ContentSection::get($page, $sectionKey, $default);
        if ($val && ! str_starts_with($val, 'http') && ! str_starts_with($val, '/')) {
            return asset('images/' . $val);
        }
        return $val ?: $default;
    }
}
