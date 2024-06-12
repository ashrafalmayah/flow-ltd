<?php

use Illuminate\Support\Facades\Route;

Route::get('/{locale?}', function (string $locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    return view('home');
});
