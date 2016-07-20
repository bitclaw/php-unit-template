<?php

namespace PHPCode\Test;

use PHPCode;

class AlgorithmTest extends \PHPUnit_Framework_TestCase{

    public function testMinimumViableTest() {
        $this->assertTrue(true, "true didn't end up being false!!!");
    }

    public function testAddAllNumbers() {
        $algo = new PHPCode\Algorithm();
        $result = $algo->addAllNumbers(2);
        $this->assertCount(2,$result);
    }

}