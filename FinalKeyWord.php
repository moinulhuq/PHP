<?php

/*    Note: Properties cannot be declared final, only classes and methods may be declared as final. */

class ParentClass{

	public function callMethod(){
		return $this->invokeMethod();
	}
	
	final public function invokeMethod(){
		echo "I am Invoked from parent";
	}
	
} 

class ChildClass extends ParentClass{

	public function invokeMethod(){ // Not Allowed Function overriding (Fatal error: Cannot override final method ParentClass::invokeMethod())
		echo "I am Invoked from child";
	}
}

$ObjParentClass = new ParentClass();
$ObjChildClass = new ChildClass();

echo $ObjParentClass->callMethod();
echo "<br>";
echo $ObjChildClass->callMethod();


?>
