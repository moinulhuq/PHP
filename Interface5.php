<?php

/* Interface with Abstract class */

interface iPersonalInfo{

	public function setName($Name);
	public function getName();
}

abstract class myabstract implements iPersonalInfo{
	
	protected $Name;
		
	public function setName($Name){
		$this->Name = $Name;
		return $this->Name;
	}
	abstract public function getName();
}

class myclass extends myabstract{

	public function __construct($Name){
		$this->setName($Name);
	}
	
	public function getName(){ return $this->Name; }	
} 

$Objmyclass = new myclass("moin");

echo $Objmyclass->getName();

?>
