<?php

class ParentClass{

	public $pub=100;
	private $pri=101;
	protected $pro=102;
	
	public function PubFunc(){

		echo $this->pub;
		echo $this->pri;
		echo $this->pro;		
	}
}

class ChildClass extends ParentClass{

	public function PubFunc(){
	
		echo $this->pub;
		echo $this->pri;
		echo $this->pro;		
	}

}

$ObjChildClass = new ChildClass();

$ObjChildClass->PubFunc(); 

/* 
100
(Notice: Undefined property: ChildClass::$pri)
102 
*/


?>
