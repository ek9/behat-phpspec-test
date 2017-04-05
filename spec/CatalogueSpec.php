<?php

namespace spec;

use Catalogue;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CatalogueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Catalogue::class);
    }

    public function it_should_add()
    {
        $this::add();
    }
}
