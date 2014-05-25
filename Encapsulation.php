<?php

/*
Encapsulation is a way how you define your properties and methods can be used.  It's the idea of hiding information. Suppose you have an Animal Class, and it has a function called getName() then you've created a subclass of Animal called Cow class. Now, when we used the function getName() it will return the name of the animal which is Cow.

Advantage of Encapsulation
---------------------------

Can restrict your data i.e. who can access what
Easy to maintain and change your code.
Encapsulation reduce coupling and increase cohesion
Increases usability

*/

class Animal {

public function getName($arg) {
		echo "This is the ".$arg." Class";
     }
}

class Cow extends Animal{
	
public function sayName() {
		$this->getName(get_class($this));
    }
}

$cow = new Cow();
$cow->sayName(); // This is the Cow Class

/*
Now here's the problem What if someone created an Animal Object and want to access that function. Would you allow? For that reason PHP5 provides data-hiding capabilities with public, protected, and private.
*/

$animal = new Animal();
$animal->getName("blah"); // This is the blah Class 

/* --------------------------------------------------------------------------------------------------------- */

/*
That's unacceptable since I only want that getName() function can be accessed from subclasses of Animal. That is why, I have to change it from Public to Protected.
*/

class Animal {

protected function getName($arg) {
		echo "This is the ".$arg." Class";
     }
}

$animal = new Animal();
$animal->getName("blah"); // Fatal error: Call to protected method Animal::getName()

/*
Now if we created an Animal object like we did before it shows Fatal error: Call to protected method Animal::getName() because  it's protected i.e. only it's base class and subclasses can access that method. Now it is accepted.
*/

/* --------------------------------------------------------------------------------------------------------- */

/*
What if we made it private and call that function inside our cow.php?
*/

class Animal {

private function getName($arg) {
		echo "This is the ".$arg." Class";
     }
}

class Cow extends Animal{
	
public function sayName() {
		$this->getName(get_class($this)); // Call to private method Animal::getName()
    }
}

$cow = new Cow();
$cow->sayName(); // Call to private method Animal::getName()

/*
Ofcourse.. you can't call that method because it's private and can only be accessed by it's base class.
*/

?>
