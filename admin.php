<?php
    abstract class A{
        abstract protected function setValue();
        public function printValue(){
            print $this->setValue(). "\n";
        }
    }

    class B extends A{
        public function setValue(){
            return "B exteds A";
        }
    }
    class C extends B{
        public function setValue(){
            return "C extens A";
        }
    }

    $obj2=new B;
    $obj2->printValue();

    $obj1=new C;
    $obj1->printValue();
?>