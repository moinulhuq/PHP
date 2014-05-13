<?php
 
/* You can use this if all your files are located in a single directory and your application uses .php files and .inc files (Custom configuration files). */
/* To add your directory containing all files, Use "set_include_path()" and as you require configuration files as well, you could use spl_autoload_extensions() to list the extensions .php and .inc. */

set_include_path(get_include_path().PATH_SEPARATOR.realpath('path/to/class'));
spl_autoload_extensions('.php, .inc');
spl_autoload_register();

$myclass = new myclass(); 

/* Since spl_autoload is the default implementation of the __autoload() magic method, PHP will call spl_autoload when you try and instantiate a new class. */
 
?>
