<?php

require 'namespace.php';

/* $myclass = new \MyNameSpace\TestClass\myclass(); */

//(or)

/*
use \MyNameSpace\TestClass\myclass;

$myclass = new myclass();
*/

//(or)


use \MyNameSpace\TestClass\myclass as NameSpaceClass;

$myclass = new NameSpaceClass();

print_r($myclass->Func());

?>
