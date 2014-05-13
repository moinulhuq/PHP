<?php

/* Multiple AutoLoader using function */

/*
|-- path
|   `-- to
|       |-- class
|       |   `-- myclass.php
|       |   `-- myclass.inc
|       |-- lib
|       |   `-- mylib.php

*/

/*** nullify any existing autoloads ***/
spl_autoload_register(null, false);

/*** specify extensions that may be loaded ***/
spl_autoload_extensions('.php, .class.php, .lib.php');

/*** class Loader ***/
function classLoader($className)
{
    $path = '/path/to/class/';

    include $path.$className.'.php';
}

/*** lib Loader ***/
function libLoader($className)
{
    $path = '/path/to/lib/';

    include $path.$className.'.php';
}

/*** register the loader functions ***/
spl_autoload_register('classLoader');
spl_autoload_register('libLoader');

/*** a new instance of class ***/
$myclass = new myclass();

/*** a new instance of class ***/
$mylib = new mylib();

?>
