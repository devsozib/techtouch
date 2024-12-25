<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_addtion_between_two_number(): void
    {
        $num1 = 5;
        $num2 = 10;
        $result = $num1 + $num2;

        $this->assertEquals(15, $result);
    }
}
