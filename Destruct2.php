<?php

/* The destructor will be called even if script execution is stopped using exit(). */

/*
class myclass{

	public function __construct(){
		echo "I am constructor";
	}
	
	public function myfunction(){		
		exit(); // here is the catch
		echo "I am myfunction";
	}
	
	public function __destruct(){
		echo "I am destructor";
	}
}
*/

//OUTPUT: "I am constructor" "I am destructor"

////////////////////////////////////////////////////////

class myclass{

	public function __construct(){
		echo "I am constructor";
	}
	
	public function myfunction(){		
		echo "I am myfunction";
	}
	
	public function __destruct(){
		exit(); // here is the catch	
		echo "I am destructor";
	}
}

$Objmyclass = new myclass();

$Objmyclass->myfunction(); // "I am constructor" "I am myfunction"

/* Calling exit() in a destructor will prevent the remaining shutdown routines from executing.  */

?>
