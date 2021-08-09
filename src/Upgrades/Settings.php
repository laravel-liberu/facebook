<?php

namespace LaravelEnso\Facebook\Upgrades;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use LaravelEnso\Facebook\Models\Settings as Model;
use LaravelEnso\Upgrade\Contracts\MigratesData;
use LaravelEnso\Upgrade\Contracts\MigratesPostDataMigration;
use LaravelEnso\Webshop\Models\Settings as WebshopSettings;

class Settings implements MigratesData, MigratesPostDataMigration
{
    public function isMigrated(): bool
    {
        return Model::exists();
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

    public function migratePostDataMigration(): void
    {
        Schema::table('webshop_settings', function (Blueprint $table) {
            $table->dropColumn('facebook_verification_code');
            $table->dropColumn('facebook_page_id');
            $table->dropColumn('facebook_domain_verification');
        });
    }
}
