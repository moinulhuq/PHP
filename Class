<?php

//public class myclass // Not Allowed
//class myclass // Allowed

/* Class definitions begin with the keyword class, followed by a class name. */

//class 1{} // Not Allowed
//class 12{} // Not Allowed
//class final{} // Not Allowed
//class _1{} // Allowed
//class _12{} // Allowed
//class #ijk{} //  Not Allowed
//class $abc{} //  Not Allowed
//class @xyz{} //  Not Allowed

/*  A valid class name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. */

/* A class may contain its own constants, variables (called "properties"), and functions (called "methods").  */

class myclass{
	
	var $x=0;
	//public var $x=0; // Not Allowed
	public $y=0; 
	const PI = 3.14;
	static $s = 0;

/* Variable */

function myfunction(){
	return $this->x;
/* The pseudo-variable $this is available when a method is called from within an object context. $this is a reference to the calling object  */
}

public function myPubfunction(){
	echo "myPubfunction";
}

public static function myPubStatfunction(){
	echo "myPubfunction";
}
/* Mthods */	

}

/* To create an instance of a class, the new keyword must be used. An object will always be created unless the object has a constructor defined that throws an exception on error. Classes should be defined before instantiation */

$Objmyclass = new myclass();
echo $Objmyclass->myfunction();

echo "<br>";

/* If a string containing the name of a class is used with new, a new instance of that class will be created. If the class is in a namespace, its fully qualified name must be used when doing this.  */

$ClassName = "myclass";
$Objmyclass1 = new $ClassName();
echo $Objmyclass1->myfunction();




?>
