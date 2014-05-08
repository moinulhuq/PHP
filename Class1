<?php

/* In the class context, it is possible to create a new object by new self and new parent.  */	

class ParentClass{
	
	var $i=0;
	var $j=0; 

	function myParentfunction(){
		$obj = new self();
		return $obj;
	}
}

class ChildClass extends ParentClass{
	
	var $x=0;
	var $y=0; 

	function myChildfunction(){
		$obj = new parent();
		return $obj;
	}
}

$ObjParentClass = new ParentClass();
print_r($ObjParentClass->myParentfunction());

echo "<br>";

$ObjChildClass = new ChildClass();
print_r($ObjChildClass->myChildfunction());

?>
