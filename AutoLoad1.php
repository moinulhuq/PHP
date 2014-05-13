<?php

/* using an anonymous function as of PHP 5.3.0 */

spl_autoload_register(

function ($className)
{
    $path = '/path/to/class/';

    include $path.$className.'.php';
}

);


$myClass = new myclass();

/* In the example, above, "myclass" is the name of the class that you are trying to instantiate, PHP passes this name as a string to spl_autoload_register(), which allows you to pick up the variable and use it to "include" the appropriate class/file. As a result, you don't specifically need to include that class via an include/require statement...  */

?>
