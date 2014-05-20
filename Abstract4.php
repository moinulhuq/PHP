<?php

abstract class class1 {
	abstract public function someFunc()
}

abstract class class2 extends class1 {
	//abstract public function someFunc(); // If you do not implement here it cause errorbut if you omit it it won't cause error.
	abstract public function OtherFunc();	
}

?> 
