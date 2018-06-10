<?php
if (!function_exists('env')) {

    function env($name, $default = null)
    {
        return getenv($name) ?: $default;
    }
}
