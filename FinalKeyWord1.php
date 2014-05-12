<?php

/*final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.*/

final class ParentClass{

	public function callMethod(){
		return $this->invokeMethod();
	}
	
	public function invokeMethod(){
		echo "I am Invoked from parent";
	}
	
} 

class ChildClass extends ParentClass{ // Not Allowed inheritance (Fatal error: Class ChildClass may not inherit from final class (ParentClass))

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
