<?php


/**
 * class Stack
 */
class Stack {

    public $isEmpty = true;
    public $object;

    /**
     * returns true if no item is in the stack
     */
    public function isEmpty() {
        return $this->isEmpty;
    }

    public function push($param) {
        $this->isEmpty = false;
        $this->object = $param;
    }

    public function pop() {
        $this->isEmpty = true;
        return $this->object;
    }
}

?>