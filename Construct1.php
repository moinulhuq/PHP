<?php

/* PHP does not have any default constructor like java. */

class ParentClass{

}

class ChildClass extends ParentClass{

	public function __construct(){
		parent::__construct();
	}
}

$ObjChildClass = new ChildClass(); // (Fatal error: Cannot call constructor)


?>
