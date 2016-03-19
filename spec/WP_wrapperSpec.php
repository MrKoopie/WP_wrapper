<?php

namespace spec\MrKoopie\WP_wrapper;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WP_wrapperSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MrKoopie\WP_wrapper\WP_wrapper');
    }

    function it_can_get_the_date()
    {
    	$this->print_r('Y',1)
    		 ->shouldBeEqualTo(print_r('Y', 1));
    }
}
