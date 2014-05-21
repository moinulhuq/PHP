<?php

/* Multi level of inheritance is allowed but mutiple inheritance is not allowed */

class A {
        // more code here
}
 
class B extends A {
        // more code here
}
 
class C extends B {
        // more code here
}
 
 
$someObj = new A();  // no problems
$someOtherObj = new B(); // no problems
$lastObj = new C(); // still no problems

?>
