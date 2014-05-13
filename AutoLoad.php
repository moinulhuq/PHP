<?php

/*
|-- path
|   `-- to
|       |-- class
|       |   `-- myclass.php
*/


/* The SPL __autoload() method is one of the Magic Methods supplied in PHP. The __autoload method is called whenever a class is instantiated and will load the classs the the first time it is called. No longer is include(), require, include_once() or require_once needed as the SPL autoload takes care of this interally. */
/* spl_autoload_register() allows you to register multiple functions (or static methods from your own Autoload class) */ 
/* PHP will put into a stack/queue and call sequentially when a "new Class" is declared. */

function myAutoloader($className)
{
    $path = '/path/to/class/';

    include $path.$className.'.php';
}

spl_autoload_register('myAutoloader');


$myClass = new myclass();

/* In the example, above, "myclass" is the name of the class that you are trying to instantiate, PHP passes this name as a string to spl_autoload_register(), which allows you to pick up the variable and use it to "include" the appropriate class/file. As a result, you don't specifically need to include that class via an include/require statement...  */

?>
