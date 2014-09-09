<?php

class myclass{

/* When assigning an already created instance of a class to a new variable, the new variable will access the same instance as the object that was assigned. This behaviour is the same when passing instances to a function. */

	var $x=0;
	
	function displayVar(){
		echo $this->$x;
	}
	
}

$Objmyclass = new myclass();

$Assgclass = $Objmyclass;
$Refclass = &$Objmyclass;

$Objmyclass->x = 1234;
$Objmyclass=NULL;

print_r($Objmyclass);
print_r($Refclass);
print_r($Assgclass);

?>
