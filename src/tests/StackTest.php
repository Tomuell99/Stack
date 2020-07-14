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
 * class StackTest 
 * extends TestCase
 */
class StackTest extends TestCase {

    /**
     * test isEmpty function
     */
    public function testIsEmptyTrue() {
        $stackInstance = new Stack;
        $this->assertEquals(true, $stackInstance->isEmpty());
    }

    /**
     * test isEmpty function with pushed object
     */
    public function testIsEmptyFalse() {
        $stackInstance = new Stack;
        $stackInstance->push(1);
        $this->assertEquals(false, $stackInstance->isEmpty());
    }

    /**
     * test isEmpty with pushed and poped object
     */
    public function testPushPop() {
        $stackInstance = new Stack;
        $stackInstance->push(1);
        $stackInstance->pop();
        $this->assertEquals(true, $stackInstance->isEmpty());
    }

    /**
     * test pushed and poped object is the same
     */
    public function testPushPopSame() {
        //setup
        $stackInstance = new Stack;
        $initObject = 1;

        $stackInstance->push($initObject);
        $popObject = $stackInstance->pop();
        $this->assertEquals($initObject, $popObject);
    }

    public function testPushPopMultiple() {
        //setup
        $stackInstance = new Stack;
        $firstObject = 1;
        $stackInstance->push($firstObject);
        $secondObject = 2;
        $stackInstance->push($secondObject);
        $thirdObject = 3;
        $stackInstance->push($thirdObject);

        $firstPopObject = $stackInstance->pop(); // $thirdObject 
        $this->assertEqual($firstPopObject, $thirdObject);

        $secondPopObject = $stackInstance->pop(); // $secondObject 
        $this->assertEqual($secondPopObject, $secondObject);

        // $thirdPopObject = $stackInstance->pop(); // $firstObject 
        $this->assertEqual($thirdPopObject, $firstObject);
    }

    public function testPopEmptyStack() {
        $stackInstance = new Stack;
        $nullObject = $stackInstance->pop();

        $this->assertEquals(null, $nullObject);
    }

    public function testTopNotEmpty() {
        $stackInstance = new Stack;
        $stackInstance->push(1);
        $stackInstance->top();

        $this->assertEquals(true, $stackInstance->isEmpty());
    }

    public function testTop() {
        $stackInstance = new Stack;
        $initObject = 1;
        $stackInstance->push($initObject);

        $topObject = $stackInstance->top();
        $this->assertEqauls($initObject, $topObject);
    }

    public function testNullTop() {
        $stackInstance = new Stack;
        $nullObject = $stackInstance->top();

        $this->assertEquals(null, $nullObject);
    }
}

?>