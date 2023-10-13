<?php

namespace LaravelLiberu\Facebook\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelLiberu\Facebook\Http\Requests\ValidateSettings;
use LaravelLiberu\Facebook\Models\Settings;

class Update extends Controller
{
    public function __invoke(ValidateSettings $request, Settings $settings)
    {
        $settings->update($request->validated());

        return ['message' => 'Settings were stored sucessfully'];
    }
}
