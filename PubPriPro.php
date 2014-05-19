<?php

/* visibility of a property or method can be declared with the keywords public, protected or private. */

/* 
* Class members declared public can be accessed everywhere.
*  Members declared protected can be accessed only within the class itself and by inherited and parent classes.
* Members declared as private may only be accessed by the class that defines the member. 
*/


class myclass{

/* Class properties must be defined as public, private, or protected. If declared using var, the property will be defined as public.  */

	// var $pub=100;
	
	public $pub=100;
	private $pri=101;
	protected $pro=102;

/* Class methods may be defined as public, private, or protected. Methods declared without any explicit visibility keyword are defined as public.  */

	// function PubFunc(){}
	
	public function PubFunc(){
		echo "Hi I am Public Function";
	}
	private function PriFunc(){
		echo "Hi I am Private Function";
	}
	protected function ProFunc(){
		echo "Hi I am Protected Function";
	}	

}

$Objmyclass = new myclass();

echo $Objmyclass->pub; // public- 100
//echo $Objmyclass->pro; // protected (Fatal error: Cannot access protected property myclass::$pro)
//echo $Objmyclass->pri; // private (Fatal error: Cannot access private property myclass::$pri)

$Objmyclass->PubFunc(); // public - Hi I am Public Function
//$Objmyclass->PriFunc(); // private (Fatal error: Call to private method myclass::PriFunc() from context)
//$Objmyclass->ProFunc(); // protected (Fatal error: Call to protected method myclass::ProFunc() from context)

?>
