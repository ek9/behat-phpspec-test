<?php

namespace spec;

use Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Product::class);
    }

    public function it_should_named_and_priced()
    {
        $this::namedAndPriced();
    }
}
