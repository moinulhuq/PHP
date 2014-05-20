<?php

/* Interfaces can be extended like classes using the extends operator.  */

interface iPersonalInfo{

	public function setName($Name);
	public function getName();
	public function setDOB($DOB);
	public function getDOB();
}

interface iContact extends iPersonalInfo{

	public function setPhone($Phone);
	public function getPhone();
}

// class Empclass extends iPersonalInfo {} (Fatal error: Class Empclass cannot extend from interface iPersonalInfo)
// class Empclass extends iContact {} (Fatal error: Class Empclass cannot extend from interface iContact)

class Empclass extends iContact{
	
	private $Name;
	private $DOB;
	private $Phone;

	public function setName($Name){ $this->Name = $Name; }	
	public function getName(){ return $this->Name; }	
	public function setDOB($DOB){ $this->DOB = $DOB; }	
	public function getDOB(){ return $this->DOB; }	
	public function setPhone($Phone){ $this->Phone = $Phone; }	
	public function getPhone(){ return $this->Phone; }	
} 

$ObjEmpclass = new Empclass();

$ObjEmpclass->setName("moin");
$ObjEmpclass->setDOB("01-01-1980");
$ObjEmpclass->setPhone("0224158470");

echo $ObjEmpclass->getName()."<br>";
echo $ObjEmpclass->getDOB()."<br>";
echo $ObjEmpclass->getPhone()."<br>";

?>
