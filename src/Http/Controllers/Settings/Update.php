<?php

namespace LaravelEnso\Facebook\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelEnso\Facebook\Http\Requests\ValidateSettings;
use LaravelEnso\Facebook\Models\Settings;

class Update extends Controller
{
    public function __invoke(ValidateSettings $request, Settings $settings)
    {
        $settings->update($request->validated());

        return ['message' => 'Settings were stored sucessfully'];
    }
}
