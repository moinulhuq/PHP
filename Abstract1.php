<?php

/* It is not allowed to create an instance of a class that has been defined as abstract which means you cannot initialize an object from an abstract class. Invoking static method of abstract class is still feasible. */

abstract class myAbstract{

    public static function test()
    {
        echo "test\n";
    }
}

myAbstract::test();

?>
