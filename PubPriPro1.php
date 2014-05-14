<?php

class myclass{

public $pub=100;
private $pri=101;
protected $pro=102;

public function PubFunc(){
	echo $this->pub;
	echo $this->pri;
	echo $this->pro;		
}

}

$Objmyclass = new myclass();

echo $Objmyclass->pub; // public- 100
//echo $Objmyclass->pro; // protected (Fatal error: Cannot access protected property myclass::$pro)
//echo $Objmyclass->pri; // private (Fatal error: Cannot access private property myclass::$pri)

$Objmyclass->PubFunc(); // "100" "101" "102"

?>
