<?php

namespace App\Helpers;

use DateTime;
use DateTimeZone;

class IpHelpers
{
    public static function getRealIp(): string
    {
        return $_SERVER['HTTP_CLIENT_IP']
            ?? $_SERVER["HTTP_CF_CONNECTING_IP"]
            ?? $_SERVER['HTTP_X_FORWARDED']
            ?? $_SERVER['HTTP_X_FORWARDED_FOR']
            ?? $_SERVER['HTTP_FORWARDED']
            ?? $_SERVER['HTTP_FORWARDED_FOR']
            ?? $_SERVER['REMOTE_ADDR']
            ?? '0.0.0.0';
    }
}
