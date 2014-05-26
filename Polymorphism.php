<?php

/*
Poly = many and Morph = form i.e. Polymorphism is the ability of an object to take on many forms. It allows us to use functions with same name but with different functionality i.e. function name will remain same but it take different number of arguments and can do different task. 
	
There are two types of Polymorphism

1. Compile time(function overloading)

* If you create more than one function with same name but with different signature.
* That means it could have different number of parameters, different datatype of the parameter etc. that is known as Compile Time Polymorphism.
* PHP does not support Overloading.

2. Run time(function overriding) 

* Runtime polymorphism means that a decision is made at runtime (not compile time).
* If you override any method declared in superclass (either protected or public) and perform anything with that function in	subclass that is call Run Time Polymorphism.

But PHP "does not support" compile time polymorphism, which means function overloading and operator overloading.
*/

abstract class Shape {
    
    private $x = 0;
    private $y = 0;

    public abstract function area();
}

class Rectangle extends Shape {

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    function area() {
        return $this->x * $this->y;
    }
}

class Square extends Shape {

    function __construct($x) {
        $this->x = $x;
    }

    function area() {
        return $this->x * $this->x;
    }
}

$shapes = array(
    new Square(5), 
    new Rectangle(12, 4), 
    new Square(8)
);

foreach ($shapes as $shape) {
    echo $shape->area() . "\n"; // 25 48 64 
}

?>
