<?php

/* Multiple AutoLoader using class */

/*
|-- path
|   `-- to
|       |-- class
|       |   `-- myclass.php
|       |   `-- myclass.inc
|       |-- lib
|       |   `-- mylib.php

*/

/* The benefit of using spl_autoload_register() is that unlike, __autoload(), you don't need to implement an autoload function in every file that you create. spl_autoload_register() also allows you to register multiple autoload functions to speed up autoloading and make it even easier. */

class MyAutoloader{

public static function classLoader($className)
{
    $path = '/path/to/class/';

    include $path.$className.'.php';
}

public static function libLoader($className)
{
    $path = '/path/to/lib/';

    include $path.$className.'.php';
}

}

spl_autoload_register(array('MyAutoloader', 'classLoader')); // (or) spl_autoload_register('MyAutoloader::ClassLoader');
spl_autoload_register(array('MyAutoloader', 'libLoader'));  // (or) spl_autoload_register('MyAutoloader::libLoader');


$myclass = new myclass();

$mylib = new mylib();

?>
