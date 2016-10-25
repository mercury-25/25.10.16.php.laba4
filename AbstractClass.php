<?php
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract public function f1();
    // Common method
    public function printOut() {
        print $this->getValue() . "\n";
    }
	 public  function sum(){
        /*код*/
        $n = $this->f1();
        $sum = $n*$n;
        echo $sum;
	 }
}
?>