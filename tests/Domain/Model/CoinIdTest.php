<?php

namespace Domain\Model;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CoinIdTest extends TestCase
{
    public function testGetId()
    {
        $id = CoinId::create('123e4567-e89b-12d3-a456-426655440000');
        Assert::assertSame('123e4567-e89b-12d3-a456-426655440000', $id->getId(), 'This is not the same id');
    }

    public function testCastingToString()
    {
        $id = CoinId::create('123e4567-e89b-12d3-a456-426655440000');
        Assert::assertSame('123e4567-e89b-12d3-a456-426655440000', (string)$id, 'This is not the same id');
    }
}
