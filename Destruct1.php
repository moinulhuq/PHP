<?php

/* Destructor method will call as soon as there are no other references to a particular object. */

class ParentClass{

	public function __construct(){
		echo "I am parent constructor";
	}
	
	public function __destruct(){
		echo "I am parent destructor";
	}
}

/*
class ChildClass extends ParentClass{

	public function __construct(){
		echo "I am child constructor";
	}
	
	public function __destruct(){
		echo "I am child destructor";
	}
}

$ObjChildClass = new ChildClass(); // "I am child constructor" "I am child destructor"
*/

/* Child class may inherit the parent's destructor if it does not implement one itself.  */

//////////////////////////////////////////////////////////////////////////////////////////////////

class ChildClass extends ParentClass{

	public function __construct(){
		parent::__construct();
		echo "I am child constructor";
	}
	
	public function __destruct(){
		parent::__destruct();	
		echo "I am child destructor";
	}
}

$ObjChildClass = new ChildClass(); // "I am parent constructor" "I am child constructor" "I am parent destructor" "I am child destructor"

/* parent destructors will not be called implicitly. To run a parent destructor, need to explicitly call parent::__destruct() in the destructor body. */

?>
