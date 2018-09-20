<?php

namespace Domain\Model;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CoinTest extends TestCase
{

    public function testCreatingCoin()
    {
        $coin = new Coin(
            CoinId::create('123e4567-e89b-12d3-a456-426655440000'),
            'title',
            'long description',
            2000
        );

        Assert::assertSame('123e4567-e89b-12d3-a456-426655440000', (string)$coin->getId(), 'This is not the expected ID');
        Assert::assertSame('title', $coin->getTitle(), 'This is not the expected title');
        Assert::assertSame('long description', $coin->getDescription(), 'This is not the expected description');
        Assert::assertSame(2000, $coin->getYear(), 'This is not the expected year');
    }
}
