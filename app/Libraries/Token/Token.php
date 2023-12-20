<?php

declare(strict_types=1);

namespace App\Libraries\Token;
use Random\Randomizer;

class Token
{
    public static function createToken(): string
    {   
        $rand = new Randomizer();

        return $rand->getBytesFromString('abcdefghijklmnopqrstuvwxyz0123456789', 64);
    }
}
