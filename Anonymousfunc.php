<?php
/*PHP anonymous function*/

$functionReference = function(){
                         echo "anonymous function called";
                    };
 
echo $functionReference();

/*PHP anonymous function with parameter*/

$functionReference = function( $name, $timeOfDay ) {
					  	return ( "Good $timeOfDay, $name!" );
					};
 
echo $functionReference("Moin","Morning");

/*PHP anonymous function can be stored in array*/

$luckyDip = array(
 
  function() {
    echo "You got a bag of toffees!";
  },
 
  function() {
    echo "You got a toy car!";
  },
 
  function() {
    echo "You got some balloons!";
  }
);

echo $luckyDip['2']();
?>
