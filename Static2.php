<?php

/* A non-static member belongs to an instance where as you don't have an instance in a static context. That's why you can't access a non-static member without explicitly mentioning an object reference. */

class myclass{

	public $Pub=100; // public variable
	
	public static $PubSta=200; // static variable
	
	public function abc(){ // public function
		echo "I am public function";
	}
	
	public static function xyz(){ // static function
		echo "I am static function";
	}
	
///////////////////////////////////////////////////////////////////

	public function PubFunc1(){
		echo $this->Pub;
	}

	public function PubFunc2(){
		echo self::$PubSta;
	}

	public function PubFunc3(){
		echo $this->abc();
	}

	public function PubFunc4(){
		echo self::xyz();
	}

///////////////////////////////////////////////////////////////////

	public static function PubStaFunc1(){
		echo $this->Pub;
	}

	public static function PubStaFunc2(){
		echo self::$PubSta;
	}

	public static function PubStaFunc3(){
		return $this->abc();
	}

	public static function PubStaFunc4(){
		return self::xyz();
	}


/* In fact, you can access a non-static member in a static context by declarin the object reference explicitly. */

	public static function PubStaFunc5(myclass $Objmyclass){
		echo $Objmyclass->Pub;
	}
	
	public static function PubStaFunc6(myclass $Objmyclass){
		return $Objmyclass->abc();
	}

}

$Objmyclass =  new myclass();
//$Objmyclass->PubFunc1(); // 100
//$Objmyclass->PubFunc2(); // 200
//$Objmyclass->PubFunc3(); // I am public function
//$Objmyclass->PubFunc4(); // I am static function

//$Objmyclass->PubStaFunc1(); // (Fatal error: Using $this when not in object context)
$Objmyclass->PubStaFunc2(); // 200
//$Objmyclass->PubStaFunc3(); // (Fatal error: Using $this when not in object context)
$Objmyclass->PubStaFunc4(); // 'I am static function'

/* In fact, you can access a non-static member in a static context by declarin the object reference explicitly. */

$Objmyclass->PubStaFunc5($Objmyclass); // 100
$Objmyclass->PubStaFunc6(new myclass()); // I am public function

?>
