<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Facebook\Http\Controllers\Settings\Index;
use LaravelLiberu\Facebook\Http\Controllers\Settings\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/integrations/facebook/settings')
    ->as('integrations.facebook.settings.')
    ->group(function () {
        Route::get('', Index::class)->name('index');
        Route::patch('{settings}', Update::class)->name('update');
    });
