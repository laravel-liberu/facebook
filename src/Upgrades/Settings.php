<?php

namespace LaravelEnso\Facebook\Upgrades;

use Illuminate\Support\Facades\Schema;
use LaravelEnso\Facebook\Models\Settings as Model;
use LaravelEnso\Upgrade\Contracts\MigratesData;
use LaravelEnso\Webshop\Models\Settings as WebshopSettings;

class Settings implements MigratesData
{
    public function isMigrated(): bool
    {
        return Schema::hasTable('facebook_settings') && Model::exists();
    }

    public function migrateData(): void
    {
        $settings = WebshopSettings::first();

        Model::create([
            'verification_code' => $settings->facebook_verification_code,
            'page_id' => $settings->facebook_page_id,
            'domain_verification' => (bool) $settings->facebook_domain_verification,
        ]);
    }
}
