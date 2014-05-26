<?php

/* Complete Example of Polymorphism */

interface Talkative {
    public function speak();
}

abstract class Animal {
    var $name;
    function __construct($name) {
        $this->name = $name;
    }
}

class Dog extends Animal implements Talkative {
    function speak() {
        return "Woof, woof!";
    }

    function playFetch() {
        return 'getting the stick';
    }
}

class Cat extends Animal implements Talkative{
    function speak() {
        return "Meow...";
    }
}

$animals = array(
		new Dog('Skip'), 
		new Cat('Snowball')
);

foreach($animals as $animal) {
    echo $animal->speak()."<br>";    
}

?>
