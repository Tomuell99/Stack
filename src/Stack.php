<?php


/**
 * class Stack
 */
class Stack {

    public $isEmpty = true;
    public $objects = array();

    /**
     * returns true if no item is in the stack
     */
    public function isEmpty() {
        return count($this->objects) <= 0;
    }

    public function push($param) {
        $this->isEmpty = false;
        $this->objects[] = $param;
    }

    public function pop() {
        $this->isEmpty = true;
        return array_pop($this->objects);
    }

    public function top() {
        return end($this->objects);
    }
}

?>