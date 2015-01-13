<?php namespace spec\Chenkacrud\ImageManager;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DropboxImageSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Chenkacrud\ImageManager\DropboxImage');
    }
}
