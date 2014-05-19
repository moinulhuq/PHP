<?php

class ParentClass{

	public function test(){
		echo $this->TestPublic();
		echo $this->TestPrivate();
	}
	
	public function TestPublic(){
		echo "Parent::TestPublic\n";
	}
	
	private function TestPrivate(){
		echo "Parent::TestPrivate\n";
	}
	
}

class ChildClass extends ParentClass{

	public function TestPublic(){
		echo "Child::TestPublic\n";
	}
	
	private function TestPrivate(){
		echo "Child::TestPrivate\n";
	}
}

$ObjChildClass = new ChildClass();

$ObjChildClass->test(); // Child::TestPublic 
						            // Parent::TestPrivate 


?>
