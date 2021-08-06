<?php

namespace LaravelEnso\Facebook\Http\Controllers\Settings;

use Illuminate\Routing\Controller;
use LaravelEnso\Facebook\Forms\Builders\Settings as Form;
use LaravelEnso\Facebook\Models\Settings;

class Index extends Controller
{
    public function __invoke(Form $form)
    {
        return ['form' => $form->edit(Settings::current())];
    }
}
