<?php

namespace App;

use Ramsey\Uuid\Uuid as Generator;

class Uuid
{
    private function __construct()
    {
    }

    public static function generate(): string
    {
        return Generator::uuid1()->toString();
    }
}
