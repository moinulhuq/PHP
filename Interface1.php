<?php

interface iPersonalInfo{

	public function setName($Name);
	public function getName();
	public function setDOB($DOB);
	public function getDOB();
}

interface iContact{

	public function setPhone($Phone);
	public function getPhone();
}

/* Classes may implement more than one interface if desired by separating each interface with a comma.*/

class Empclass implements iPersonalInfo, iContact{
	
	private $Name;
	private $DOB;
	private $Phone;

/* The class implementing the interface must use the exact same method signatures as are defined in the interface.*/	
					
	public function setName($Name){ $this->Name = $Name; }	
	public function getName(){ return $this->Name; }	
	public function setDOB($DOB){ $this->DOB = $DOB; }	
	public function getDOB(){ return $this->DOB; }	
	public function setPhone($Phone){ $this->Phone = $Phone; }	
	public function getPhone(){ return $this->Phone; }	
} 

class Studclass implements iPersonalInfo, iContact{
	// Same as Employee class	
} 


$ObjEmpclass = new Empclass();

$ObjEmpclass->setName("moin");
$ObjEmpclass->setDOB("01-01-1980");
$ObjEmpclass->setPhone("0224158470");

echo $ObjEmpclass->getName()."<br>";
echo $ObjEmpclass->getDOB()."<br>";
echo $ObjEmpclass->getPhone()."<br>";

?>
