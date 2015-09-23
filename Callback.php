<?php

/*
-> A callback function is a function that you create yourself, then pass it to as an another function's argument. 

-> Then it walks through with each elements in the array and calls your callback function for each element's value, 
   and your callback function needs to return the new value . then array_map()  replaces the element's value with your callback's 
   return value. Once it's done, array_map() returns the modified array but the original array remain untouched.
*/

// Create a regular callback function...
function nameToGreeting( $name ) {
  return "Hello " . ucfirst( $name ) . "!";
}
 
// ...then map the callback function to elements in an array.
$names = array( "fred", "mary", "sally" );
print_r( array_map( "nameToGreeting", $names ) );

/////////////////////////////////////////////////////////////////////////////////////////////////

// A neater way:
// Map an anonymous callback function to elements in an array.
print_r ( 
	array_map( 
				function( $name ) {
  					return "Hello " . ucfirst( $name ) . "!";
				}, 
				
				$names 
			) 
		);

?>
