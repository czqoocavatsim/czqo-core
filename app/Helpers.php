<?php

use App\AppSettings;

/**
 * Returns the app settings.
 *
 * @param $key
 * @param $default
 * @return void
 */
function app_settings($key = null, $default = null) {
    if ($key === null) {
        return app(AppSettings::class);
    }

    return app(AppSettings::class)->get($key, $default);
}
