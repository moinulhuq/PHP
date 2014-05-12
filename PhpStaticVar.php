<?php
/* For non static function */
function TestNonStatic()
{
    $a = 0;
    $a++;
	echo $a;
}

TestNonStatic();
TestNonStatic();
TestNonStatic();

echo "<br>";

/* For static function */
function TestStatic()
{
    static $a = 0;
    $a++;
	echo $a;
}

TestStatic();
TestStatic();
TestStatic();

/* A static variable exists only in a local function scope, but it does not lose its value when program execution leaves this scope. */

?>

