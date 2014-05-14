<?php

/* Destructor method will call as soon as there are no other references to a particular object. */

class myclass{

	public function __construct(){
		echo "I am constructor";
	}
	
	public function __destruct(){
		echo "I am destructor";
	}
}

$Objmyclass = new myclass(); // "I am constructor" "I am destructor"


?>
