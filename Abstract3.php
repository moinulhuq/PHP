<?php

/* php abstract class extending another abstract class. */

abstract class myAbsOne {

    abstract public function a();
    abstract public function b();

}

abstract class myAbsTwo extends myAbsOne {

    public function a(){ 
		echo "myAbsTwo-A<br>"; 
	}

	//abstract public function b(); // Not Possible (Fatal error: Can't inherit abstract function myAbsOne::b() (previously declared abstract in myAbsTwo))
	
    public function b(){
		echo "myAbsTwo-B<br>"; 
	}
		
    abstract public function c();
}

class myClass extends myAbsTwo {

    public function c(){
		echo "myClass-C"; 
	}

}

$ObjmyClass = new myClass();

$ObjmyClass->a();
$ObjmyClass->b();
$ObjmyClass->c();

?>
