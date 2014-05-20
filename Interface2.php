<?php

/* It's possible for interfaces to have constants. Interface constants works exactly like class constants except they cannot be overridden by a class/interface that inherits them.*/

interface a{
    
	const b = 'Interface constant';
}

echo a::b;


class b implements a{

    const b = 'Class constant'; // it's not allowed to override constants. (Fatal error: Cannot inherit previously-inherited or override constant b from interface a)
}

$Objb = new b();

?>
