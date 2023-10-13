<?php

namespace LaravelLiberu\Facebook\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelLiberu\Facebook\Forms\Builders\Settings as Form;
use LaravelLiberu\Facebook\Models\Settings;

class Index extends Controller
{
    public function __invoke(Form $form)
    {
        return ['form' => $form->edit(Settings::current())];
    }
}
