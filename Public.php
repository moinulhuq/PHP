<?php

class ParentClass{

	public $pub=100;
	private $pri=101;
	protected $pro=102;

	public function ParentPubFunc(){
		echo "Hi I am Public Function";
	}
	private function ParentPriFunc(){
		echo "Hi I am Private Function";
	}
	protected function ParentProFunc(){
		echo "Hi I am Protected Function";
	}	
}

class ChildClass extends ParentClass{

	public function ChildPubFunc1(){
		echo $this->pub;
	}
	public function ChildPubFunc2(){
		echo $this->pri;
	}
	public function ChildPubFunc3(){
		echo $this->pro;
	}
////////////////////////////////////////////	
	public function ChildPubFunc4(){
		echo $this->ParentPubFunc();
	}
	public function ChildPubFunc5(){
		echo $this->ParentPriFunc();
	}
	public function ChildPubFunc6(){
		echo $this->ParentProFunc();
	}		
}


$ObjChildClass = new ChildClass();

echo $ObjChildClass->ChildPubFunc1(); // 100
//echo $ObjChildClass->ChildPubFunc2(); // (Notice: Undefined property: ChildClass::$pri )
echo $ObjChildClass->ChildPubFunc3(); //102

$ObjChildClass->ChildPubFunc4(); // "Hi I am Public Function"
//$ObjChildClass->ChildPubFunc5(); // (Fatal error: Call to private method ParentClass::ParentPriFunc() from context)
$ObjChildClass->ChildPubFunc6(); // "Hi I am Protected Function"

?>
