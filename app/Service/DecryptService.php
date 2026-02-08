<?php

namespace App\Service;

use Illuminate\Contracts\Encryption\DecryptException;

class DecryptService
{

    public static function decrypt($value)
    {
        try {
            return decrypt($value);
        } catch (DecryptException $e) {
            return false;
        }
    }
}
