<?php

use LaravelEnso\Migrator\Database\Migration;

return new class extends Migration
{
    protected ?string $parentMenu = 'Facebook';

    protected array $menu = [
        'name' => 'Settings', 'icon' => 'fad user-cog', 'route' => 'integrations.facebook.settings.index', 'order_index' => 200, 'has_children' => false,
    ];

    protected array $permissions = [
        ['name' => 'integrations.facebook.settings.index', 'description' => 'Show settings for Facebook', 'is_default' => false],
        ['name' => 'integrations.facebook.settings.update', 'description' => 'Update Facebook settings', 'is_default' => false],
    ];
};
