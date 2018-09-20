<?php

declare(strict_types=1);

namespace spec\Domain\Model;

use Domain\Model\Coin;
use Domain\Common\DomainIdInterface;
use PhpSpec\ObjectBehavior;

/**
 * @mixin Coin
 */
class CoinSpec extends ObjectBehavior
{
    public function let(DomainIdInterface $id)
    {
        $this->beConstructedWith($id, 'title', 'long description', 2000);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Coin::class);
    }

    public function it_has_id(DomainIdInterface $id)
    {
        $this->getId()->shouldReturn($id);
    }

    public function it_has_title()
    {
        $this->getTitle()->shouldBeString();
    }

    public function it_has_description()
    {
        $this->getDescription()->shouldBeString();
    }

    public function it_has_year()
    {
        $this->getYear()->shouldBeInteger();
    }
}
