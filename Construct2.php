<?php

/* Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private). */

/*

class ParentClass{
	public function __construct(){
		echo "I am Parent";
	}
}

class ChildClass extends ParentClass{

}

$ObjChildClass = new ChildClass(); // "I am Parent"

*/

/*

class ParentClass{
	public function __construct(){
		echo "I am Parent";
	}
}

class ChildClass extends ParentClass{
	public function __construct(){
		echo "I am Child";
	}
}

$ObjChildClass = new ChildClass(); // "I am Child"

*/

class ParentClass{
	public function __construct(){
		echo "I am Parent";
	}
}

class ChildClass extends ParentClass{
	public function __construct(){
		parent::__construct();
		echo "I am Child";
	}
}

$ObjChildClass = new ChildClass(); // "I am Parent" "I am Child"

?>
