<?php


/**
 * class Stack
 */
class Stack {

    public $isEmpty = true;

    /**
     * returns true if no item is in the stack
     */
    public function isEmpty() {
        return $this->isEmpty;
    }

    public function push($param) {
        $this->isEmpty = false;
    }

    public function pop() {
        $this->isEmpty = true;
    }
}

?>