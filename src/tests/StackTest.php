<?php 

/**
 * require class Stack
 */
require 'src/Stack.php';

/**
 * using phpunit framework
 */
use PHPUnit\Framework\TestCase;

/**
 * class GumballMachineTest 
 * extends TestCase
 */
class StackTest extends TestCase {

    /**
     * test isEmpty function
     */
    public function testIfWheelWorks() {
        $stackInstance = new Stack;
        $this->assertEquals(true, $stackInstance->isEmpty());
    }
}

?>