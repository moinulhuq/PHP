<?php

/*
|-- path
|   `-- to
|       |-- class
|       |   `-- myclass.php
*/


/* You can use this if all your files are located in a single directory */

set_include_path(get_include_path().PATH_SEPARATOR.realpath('path/to/class'));
 
function autoload($className)
{
    include $className.'.php';
}
 
spl_autoload_register('autoload');
 
$myClass = new myclass();
 
?>
