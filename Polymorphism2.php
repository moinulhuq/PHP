<?php

/* PHP does not support Overloading i.e. Compile time(function overloading) polymorphism */

class a{
	public function func($x){
		return $x;
	}
}

class b extends a{
	public function func($x,$y){ 
		return $x+$y; // Notice: Undefined variable: y
	}
}

$Objb = new b();
echo $Objb->func(1); // // Warning: Missing argument 2 for b::func()
echo $Objb->func(1,2);
?>
