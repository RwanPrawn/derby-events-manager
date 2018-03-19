<?php

namespace App\Entity;

use App\Uuid;

class Location
{
    private $id;

    public function __construct()
    {
        $this->id = Uuid::generate();
    }

    public function getId(): string
    {
        return $this->id;
    }
}
