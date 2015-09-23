<?php

/*
-> Normally, anonymous function wouldn't have access to the $x variable though that variable is local to myfunc()'s scope. 
However, the "use" keyword tells PHP to let the anonymous function access $x.

-> The (&) before $x tells PHP to pass a reference of the $x variable to anonymous function. This allows the anonymous function 
to manipulate $x directly. A closure's function should always access variables in its enclosing scope by reference. But if you want, 
you can omit the ampersand to pass the variable by value.
*/

function myfunc(){

	$x = 5;

	return ( 
				function() use ($x) 
				{ 

					$x=6; 
					return $x; 
				} 
			);

}

$myfunc = myfunc();

echo $myfunc();

//////////////////////////////////////////////////////

function myfuncc(){

	$x = 5;

	return ( 
				function($y) use ($x) 
				{ 

					$x=$y; 
					return $x; 
				} 
			);

}

$myfuncc = myfuncc();

echo $myfuncc("10");

?>
