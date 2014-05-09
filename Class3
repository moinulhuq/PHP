<?php
/* A class can inherit the methods and properties of another class by using the keyword extends in the class declaration. It is not possible to extend multiple classes; a class can only inherit from one base class. */

class ParentClass{

	var $x=1;
	var $y=1;	
	
	public function FuncOne(){
	
		return ($this->x+$this->y);
	}

	final public function FuncTwo(){
	
		return ($this->x+$this->y+1);
	}

}

class ChildClass extends ParentClass{

	var $i=2;
	var $j=2;	
		
/* The inherited methods and properties can be overridden by redeclaring them with the same name defined in the parent class. */

/* When overriding methods, the parameter signature should remain the same or PHP will generate an E_STRICT level error. This does not apply to the constructor, which allows overriding with different parameters. */

	public function FuncOne(){
		
		return ($this->i+$this->j);
	}	
	
/* If the parent class has defined a method as final, that method may not be overridden (Fatal error: Cannot override final method ParentClass::FuncTwo())*/	

	//public function FuncTwo(){	
	//	return ($this->x+$this->y+1);
	//}	
	
/* It is possible to access the overridden methods or static properties by referencing them with parent::.  */

	public function CFuncTwo(){	
		return parent::FuncTwo();
	}		

}

$ObjParentClass =  new ParentClass();
$ObjChildClass = new ChildClass();

echo $ObjParentClass->FuncOne();
echo "<br>";

echo $ObjChildClass->FuncOne();
echo "<br>";

echo $ObjParentClass->FuncTwo();
echo "<br>";

echo $ObjChildClass->CFuncTwo();
echo "<br>";


?>
