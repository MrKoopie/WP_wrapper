<?php

namespace spec\MrKoopie\WP_wrapper;

use PhpSpec\ObjectBehavior;

class WP_wrapperSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('MrKoopie\WP_wrapper\WP_wrapper');
    }

    public function it_can_get_the_date()
    {
        self::print_r('Y', 1)
             ->shouldBeEqualTo(print_r('Y', 1));
    }
}
