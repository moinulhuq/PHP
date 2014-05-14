<?php

class myclass{

	public $pub=100;
	private $pri=101;
	protected $pro=102;

	public function PubFunc(){
		echo "Hi I am Public Function";
	}
	private function PriFunc(){
		echo "Hi I am Public Function";
	}
	protected function ProFunc(){
		echo "Hi I am Public Function";
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
