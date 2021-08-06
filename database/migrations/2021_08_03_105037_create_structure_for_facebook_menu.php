<?php

use LaravelEnso\Migrator\Database\Migration;

class CreateStructureForFacebookMenu extends Migration
{
    protected array $menu = [
        'name' => 'Facebook', 'icon' => 'fab facebook-square', 'route' => null, 'order_index' => 100, 'has_children' => true,
    ];

    protected ?string $parentMenu = 'Integrations';
}
