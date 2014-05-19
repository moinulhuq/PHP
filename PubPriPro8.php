<?php

/* Methods declared in a parent class can NOT access private methods defined in a Child class. They can only access protected method. */

class ParentClass {

    public function execute($method) {
        $this->$method();
    }   
}

class ChildClass extends ParentClass {

    private function privateMethod() {
        echo "hi, i'm private";
    }
   
    protected function protectedMethod() {
        echo "hi, i'm protected";
    }   
}

$object = new ChildClass();

$object->execute('protectedMethod');

$object->execute('privateMethod');

/*

hi, i'm protected
Fatal error: Call to private method ChildClass::privateMethod() from context 'ParentClass'

*/

?>
