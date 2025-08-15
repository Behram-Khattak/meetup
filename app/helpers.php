<?php

use Illuminate\Support\Str;

if (!function_exists('get_app_initials')) {
    /**
     * Get the initials of the application name.
     *
     * @return string
     */
    function get_app_initials(): string
    {
        return Str::of(config('app.name')) // application name
            ->explode(' ')
            ->take(2)
            ->map(fn ($word) => Str::substr($word, 0, 1))
            ->implode('');
    }
}
