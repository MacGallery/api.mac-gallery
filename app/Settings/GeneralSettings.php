<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;
    public string $site_description;
    public array $site_banners;
    public bool $site_enable_dark_mode;
    public bool $site_enable_reviews;

    public static function group(): string
    {
        return 'general';
    }
}
