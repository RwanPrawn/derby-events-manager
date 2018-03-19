<?php

namespace App\Entity;

use App\Uuid;

class Event
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var DateTime
     */
    private $startDate;

    /**
     * @var DateTime
     */
    private $endDate;

    public function __construct(
        string $name,
        DateTime $startDate,
        DateTime $endDate
    ) {
        $this->id        = Uuid::generate();
        $this->name      = $name;
        $this->startDate = $startDate;
        $this->endDate   = $endDate;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }
}
