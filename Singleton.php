<?php

/* Singleton is a design pattern that restricts instantiation of a class to one object. */

/*...........Normal Class.......................*/

class myclass{
	public function __construct(){
		
	}
}

/*...........Singleton Class.......................*/

class Singleton{

	private function __construct(){
		//Private constructor
		//Nobody can instancetiate it
	}
	
	public static function Instance(){
	
		static $inst = null;
		if($inst === null){
			$inst = new Singleton();
		}
		return $inst ;
	}

}

// $ObjSingleton = new Singleton(); // Fatal error: Call to private Singleton::__construct() from invalid contex

$ObjSingleton1 = Singleton::Instance();
$ObjSingleton2 = Singleton::Instance();
var_dump($ObjSingleton1); // object(Singleton)#1 (0) { } 
var_dump($ObjSingleton2); // object(Singleton)#1 (0) { } 

echo "<br>";

$Objmyclass1 = new myclass();
$Objmyclass2 = new myclass();
var_dump($Objmyclass1); // object(myclass)#1 (0) { }
var_dump($Objmyclass2); // object(myclass)#2 (0) { }  

?>
