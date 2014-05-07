<?php

class ParentClass{

	public function callMethod(){
		return $this->invokeMethod();
	}
	
	public function invokeMethod(){
		echo "I am Invoked from parent";
	}
	
} 

class ChildClass extends ParentClass{ 

	final public function invokeMethod(){ // Allowed cause No one going to override it
		echo "I am Invoked from child";
	}
}

$ObjParentClass = new ParentClass();
$ObjChildClass = new ChildClass();

echo $ObjParentClass->callMethod();
echo "<br>";
echo $ObjChildClass->callMethod();


?>
