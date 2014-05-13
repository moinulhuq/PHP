<?php

/* psr 0 autoloader with namespace */

/*
|-- path
|   `-- to
|       |-- class
|       |   `-- myclass.php
*/

/* myclass.php
----------------
	<?php
	namespace path\to\classes;
	
	class myclass{
	
		public $x=420;
		
		public function Func(){
			return $this->x;
		}
	}
	?>
*/

class myAutoloader
{
	public static function autoload($className)
	{
		$className = ltrim($className, '\\');
		$fileName  = '';
		$namespace = '';
		if ($lastNsPos = strrpos($className, '\\')) {
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}
		$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
	
		require $fileName;
	}
}

spl_autoload_register(array('myAutoloader', 'autoload'));

$myclass = new \path\to\classes\myclass();

print_r($myclass->Func());

?>
