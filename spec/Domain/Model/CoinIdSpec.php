<?php

declare(strict_types=1);

namespace spec\Domain\Model;

use Domain\Model\CoinId;
use PhpSpec\ObjectBehavior;

/**
 * @mixin CoinId
 */
class CoinIdSpec extends ObjectBehavior
{
    public function let()
    {
            $this->beConstructedThrough('create', ['123e4567-e89b-12d3-a456-426655440000']);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(CoinId::class);
    }

    public function it_has_id()
    {
        $this->getId()->shouldReturn('123e4567-e89b-12d3-a456-426655440000');
    }

    public function it_cast_id_to_string()
    {
        $this->__toString()->shouldReturn('123e4567-e89b-12d3-a456-426655440000');
    }
}
