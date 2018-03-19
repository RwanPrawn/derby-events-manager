<?php

namespace App\Entity;

use App\Uuid;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 */
class Location
{
    private $id;

    private $name;

    public function __construct()
    {
        $this->id   = Uuid::generate();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
