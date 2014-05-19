<?php
class Myclass{

	var $varX = 0;
	public static $staticX=0;
	
	/*Like any other PHP static variable, static properties may only be initialized using a literal or constant; expressions are not allowed. So while you may initialize a static property to an integer or array (for instance), you may not initialize it to another variable, to a function return value, or to an object.*/	

	//public static $staticVar = (10*10); // Not Allowed	
	//public static $staticDate = "Date: " . date('Y'); // Not Allowed
	//public static $staticDB = Database::getInstance(); // Not Allowed	

	/*Class member variables are called "properties". You may also see them referred to using other terms such as "attributes" or "fields", but for the purposes of this reference we will use "properties". They are defined by using one of the keywords public, protected, or private, followed by a normal variable declaration. This declaration may include an initialization, but this initialization must be a constant value--that is, it must be able to be evaluated at compile time and must not depend on run-time information in order to be evaluated.*/

	
	public static function staticFunc($x, $y){	
		//return self::$staticX; // Allowed
		//return Myclass::$staticX; // Allowed
		//return $this->staticX; // Not Allowed (Fatal error: Using $this when not in object context) cause 
		/*static methods are callable without an instance of the object created, the pseudo-variable $this is not available inside the method declared as static.*/
									 
		//return $staticX; // Not Allowed (Notice: Undefined variable: staticX)
		
		//return $varX; // Not Allowed (Notice: Undefined variable: varX) cause member variable has to be declared static too
		//return $this->varX; // Not Allowed (Fatal error: Using $this when not in object contex) cause member variable has to be declared static too
		//return self::$varX; // Not Allowed (Fatal error: Access to undeclared static property: Myclass::$varX)
		//return Myclass::$varX; // Not Allowed (Fatal error: Access to undeclared static property: Myclass::$varX) 
		
		//return ($x+$y); // Allowed		
		
	}

}

$ObjMyclass = new Myclass();
echo Myclass::$staticX;  // Allowed cause Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.
//echo $ObjMyclass->staticX; // Not Allowed (Notice: Undefined property: Myclass::$staticX) cause 
/*property declared as static cannot be accessed with an instantiated class object, Calling non-static methods statically generates an E_STRICT level warning */
							
echo Myclass::staticFunc(2,3);  // Allowed cause Declaring class properties or methods as static makes them accessible without needing an instantiation of the class.
echo $ObjMyclass->staticFunc(2,3);  // Allowed cause method declared as static can be accessed with an instantiated class object.
//echo Myclass::$varX; // Not Allowed (Fatal error: Access to undeclared static property: Myclass::$varX) 
/* Calling non-static methods statically generates an E_STRICT level warning. */


?>
