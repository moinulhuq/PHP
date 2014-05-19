<?php

class ParentClass{

	public function test(){
		$this->PriFunc();
	}
	
	private function PriFunc(){
		echo "Parent";
	}	
}

class ChildClass extends ParentClass{

	private function PriFunc(){
		echo "Child";
	}	
}

$ObjChildClass = new ChildClass();

$ObjChildClass->test(); // Parent

//////////////////////////////////////////////////////////

class ParentClas{

	public function test(){
		$this->PriFunc();
	}
	
	protected function PriFunc(){
		echo "Parent";
	}	
}

class ChildClas extends ParentClas{

	protected function PriFunc(){
		echo "Child";
	}	
}

$ObjChildClas = new ChildClas();

$ObjChildClas->test(); // Child

?>
