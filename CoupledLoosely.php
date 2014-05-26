<?php

/*
Loose Coupling
---------------
* In this case, Our main object "Traveller" will allow an external entity called iMove to provide the object. 
* So "Traveller" doesn't have to create an object of "car" or "plane" instead "Traveller" will get it from the iMove container.
* Apply dependency injection mechanism.
* The external entity "iMove", can inject the car or plane object based on demand of "Traveller" class.
* No changes required in "Traveller" class if we change the dependency from car to a plane.
*/

interface iMove{
	public function move();	
}

class plane implements iMove{
	public function move(){
		echo "Moving with Plane";
	}
}

class car implements iMove{
	public function move(){
		echo "Moving with car";
	}
}

class Traveller{
	public $thing = NULL;
	
	public function __construct(iMove $ithing){
		$this->thing = $ithing;
	}		
		
	public function startJourney(){
		$this->thing->move();
	}
}

$ObjTraveller = new Traveller(new plane());
$ObjTraveller->startJourney();

$ObjTraveller = new Traveller(new car());
$ObjTraveller->startJourney();

/*
Loose coupling means no need to rewrite the "Traveller" code, simple create a new class that implements iMove.
*/

?>
