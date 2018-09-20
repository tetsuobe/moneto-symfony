<?php

declare(strict_types=1);

namespace Domain\Model;

use Domain\Common\DomainIdInterface;

class CoinId implements DomainIdInterface
{
    /**
     * @var string
     */
    private $id;

    private function __construct(string $id)
    {
        $this->id = $id;
    }

    public static function create(string $id): DomainIdInterface
    {
        return new CoinId($id);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->getId();
    }
}
