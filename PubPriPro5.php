<?php

/* Same type Object can access each others private and protected members even though they are not the same instances Same type Objects can access each others private and protected members even though they are not the same instances because implementation specific details are already known those objects. */

class myclass{

	private $pri;
	
	public function __construct($x){
		$this->pri = $x;
	}
	
	private function PriFunc(){
		echo "This is private function";
	}
	
	public function access(myclass $class){
		$class->pri = "world";
		$class->PriFunc();
		
		print_r($class);
	}
	
}

$Objmyclass = new myclass("Hello");

$Objmyclass->access(new myclass("moin")); // This is private function myclass Object ( [pri:myclass:private] => world ) 

?>
