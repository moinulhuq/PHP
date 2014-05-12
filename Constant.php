<?php

/* Constants variable differ from normal variables and don't use the $ symbol to declare. */
/* The value must be a constant expression, not (for example) a variable, a property, a result of a mathematical operation, or a function call.  */

class ParentClass{

	public $x=0;
	const PI=3.14;

	public function myFunc(){
		//return $this->PI; // Not Allowed (Notice: Undefined property: myclass::$PI)
		//return PI; // Not Allowed (Notice: Use of undefined constant PI - assumed 'PI')
		return self::PI;
	}
	
	public function myFuncStat() {
		return static::PI;
	}
}

class ChildClass extends ParentClass{
	const PI=3.15;
}

$ObjParentClass = new ParentClass();
$ObjChildClass = new ChildClass();

echo $ObjParentClass->myFunc(); // 3.14
echo "<br>";
echo $ObjParentClass->myFuncStat(); // 3.14
echo "<br>";
echo $ObjChildClass->myFuncStat(); // 3.15
echo "<br>";
echo ParentClass::myFuncStat(); // 3.14
echo "<br>";
echo ChildClass::myFuncStat(); // 3.15
echo "<br>";


//echo $Objmyclass->PI; // Not Allowed (Notice: Undefined property: myclass::$PI)
echo ParentClass::PI; //3.14
echo "<br>";
echo ChildClass::PI; //3.15


?>
