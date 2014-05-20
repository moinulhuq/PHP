<?php

/* Interfaces allow you to create methods (without dfining the methods body) that a class must implement. */

/* Interfaces are defined using the interface keyword */

interface myinterface{

/* All methods declared in an interface must be public, this is the nature of an interface. */

	public function setName($Name);
	public function getName();
}

/* Implements operator is used to implement an interface. */

class myclass implements myinterface{
	
	private $Name;
		
/* All methods in the interface must be implemented within a class; failure to do so will result in a fatal error. */

	public function setName($Name){
		$this->Name = $Name;
	}
	
	public function getName(){
		return $this->Name;
	}	
} 

$Objmyclass = new myclass();

$Objmyclass->setName("moin");
echo $Objmyclass->getName();

?>
