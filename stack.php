<?php
class Stack{
    public $stack;
    public $limit;
    public function __construct($limit){
        $this->stack=array();
        $this->limit=$limit;
    }
    public function push($item){
        if(count($this->stack)<$this->limit){
            array_unshift($this->stack,$item);
        }
    else{
        echo('Stack is full!');
    }
    }
    public function pop() {
        if ($this->isEmpty()) {
//            throw new RunTimeException('Stack is empty!');
            return "Stack is empty!";
        } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}
$myBooks = new Stack(10);
$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');


echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";

$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');

var_dump($myBooks->isEmpty()) ;
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";

var_dump($myBooks->isEmpty());
