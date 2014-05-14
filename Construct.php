<?php

/* Each time object created newly, call constructor that is why it is suitable for any initialization before it is used. */

/*
class myclass{

	public function __construct(){ // Constructor
		echo "I am constructor";
	}

	public function myclass(){ // Constructor
		echo "I am myclass";
	}	
}

$Objmyclass =  new myclass();
*/

//////////////////////////////////////////////////////////////////////////////////////////////////

namespace mynamespace;

class myclass{

	public function myclass(){ // Not a Constructor act like regular fucntion in namepasce class
		echo "I am constructor";
	}
}

$Objmyclass =  new myclass(); // Nothing print

?>
