<?php

namespace LaravelLiberu\Facebook\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\Facebook\Models\Settings as Model;

class SettingsFactory extends Factory
{
    protected $model = Model::class;

    public function definition()
    {
        return [
            'domain_verification' => false,
            'verification_code' => null,
            'page_id' => null,
        ];
    }
}
