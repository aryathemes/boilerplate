<?php

namespace Application\Test;

use PHPUnit\Framework\TestCase;

class SummationTest extends TestCase
{
    public function testSum()
    {
        $result = \Application\Summation::sum(15);
        
        $this->assertEquals($result, 15);
    }
}
