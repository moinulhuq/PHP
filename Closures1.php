<?php

$people = array(
  array( "name" => "Fred", "age" => 39 ),
  array( "name" => "Sally", "age" => 23 ),
  array( "name" => "Mary", "age" => 46 )
);

usort( $people, function( $personA, $personB ) {
  return ( $personA["age"] < $personB["age"] ) ? -1 : 1;
} );
 
print_r( $people );

echo "<br><br>";

////////////////////////////////////////////////////////////////////////

function getSortFunction($SortKey){
	return (function ($personA, $personB) use ($SortKey){
			return ($personA[$SortKey] < $personB[$SortKey]) ? 1 : 1;
	});
}

usort( $people, getSortFunction("age"));
print_r($people);

echo "<br><br>";

usort( $people, getSortFunction("name"));
print_r($people);



?>
