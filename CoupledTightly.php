<?php

/*
Tight Coupling
--------------

* In complex cases the logic of one class will call the logic of another class just to provide the same service
* If this happen then it is called tight-coupling between two classes.
* In this case if first class that wants to call the logic from the second class will have to create an object from the second class
*/

class plane{
	public function move(){
		echo "Moving with Plane";
	}
}

class Traveller{
	public function startJourney(){
		$Objplane = new plane();
		$Objplane->move();
	}
}

$ObjTraveller = new Traveller();
$ObjTraveller->startJourney();

/*
In the above example traveller object is tightly coupled with car object because in place of "car" if you want to use "plane object" then, we need to make changes in Traveller class.
*/

?>
