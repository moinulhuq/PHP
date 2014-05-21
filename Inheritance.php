<?php

/*
What is Inheritance?

Ability to create a new class from an existing class by extending it. All the functionality of parent class will available at child class.

Advantage:
Can minimize the amount of duplicate code.
Can get facility to reuse code without rewriting.
Can extend the code without effecting other.
Can easily use data hiding.

Disadvantage:
Two classes are tightly coupled i.e. depend each other.
If a method is deleted from parent class we need to re-factor.

*/

/* When you extend a class, the subclass inherits all of the public and protected methods from the parent class. */

/* If a class extends another the parent must be declared before the child class. This rule applies to classes that inherit other classes and interfaces.*/

class ParentClass{
	
	public function PrintA(){ echo "ParentClass: PrintA <br>"; }
	public function PrintB(){ echo "ParentClass: PrintB <br>"; }
}

class ChildClass extends ParentClass{

/* Unless a class overrides those methods, they will retain their original functionality.*/
/* This is useful for defining and abstracting functionality. */

	public function PrintA(){ echo "ChildClass: PrintA <br>"; }	

/* No need to reimplement all the shared functionality other than that need to implement additional functionality.*/	

	public function PrintC(){ echo "ChildClass: PrintC <br>"; }	
}

$ObjParentClass = new ParentClass();

$ObjParentClass->PrintA(); // ParentClass: PrintA
$ObjParentClass->PrintB(); // ParentClass: PrintB 

$ObjChildClass = new ChildClass();

$ObjChildClass->PrintA(); // ChildClass: PrintA
$ObjChildClass->PrintB(); // ParentClass: PrintB 
$ObjChildClass->PrintC(); // ParentClass: PrintC 
?>
