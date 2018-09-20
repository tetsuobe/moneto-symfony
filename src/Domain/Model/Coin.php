<?php

declare(strict_types=1);

namespace Domain\Model;

use Domain\Common\DomainIdInterface;

class Coin
{
    /**
     * @var DomainIdInterface
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $description;
    /**
     * @var int
     */
    private $year;

    public function __construct(DomainIdInterface $id, string $title, string $description, int $year)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
    }

    public function getId(): DomainIdInterface
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
