<?php

declare(strict_types=1);

namespace Domain\Common;

interface DomainIdInterface
{
    public function getId(): string;

    public function __toString(): string;
}
