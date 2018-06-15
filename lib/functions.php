<?php
if (!function_exists('env')) {

    function env($name)
    {
        $value = getenv($name);
        switch ($value) {
            case 'true':
                return true;
            case 'false':
                return false;
            case 'null' :
                return null;
            case substr($value, 0, 1) === '"' || substr($value, 0, 1) === "'" :
                return substr($value, 1, -1);
            default:
                return $value;
        }
    }
}
