<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'MacGallery');
        $this->migrator->add('general.site_description', 'Discover the easiest way to calculate service prices with our user-friendly tool. Get accurate cost estimates for your services quickly and efficiently. Try it now!');
        $this->migrator->add('general.site_banners', []);
        $this->migrator->add('general.site_enable_dark_mode', true);
        $this->migrator->add('general.site_enable_reviews', true);
    }
};
