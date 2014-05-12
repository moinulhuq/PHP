<?php
/*late static binding as a way to “reference the called class in a context of static inheritance.”*/

class Car 
{
	public static function run() 
	{
		return static::getName();
	}

	private static function getName() 
	{
		return 'Car';
	}
}

class Toyota extends Car 
{
	public static function getName() 
	{
		return 'Toyota';
	}
}

echo Car::run(); // output: Car
echo Toyota::run(); // output: Toyota.

echo "<br>";

/*However, the run() method uses the new “static” keyword. With this keyword, the call will be forwarded to the class on witch the original method was called. So Car::run() will end up calling Car::getName() and print “Car”. But Toyota::run() will call getName() in the ChildClass and print “Toyota”.*/

/*
"self::methodname" – use the current class.
"parent::methodname" – use the parent class.
"static::methodname" – use the class that was initially called at runtime.
*/


class Record {

    protected static $tableName = 'base';

    public static function getTableName() {
        echo self::$tableName;
    }
}
class User extends Record {
    protected static $tableName = 'users';
}

User::getTableName();  // output: base

/*self is "bound" at compile time, statically. That means when the code is compiled, it is decided what self refers to. static is resolved at run time, i.e. when the code is executed. That's late static binding. And that's the difference.

With self, it is decided at compile time (when the code is "read"), that self refers to Record. Later on the code for User is parsed, but self::$tableName in Record already refers to Record::$tableName and cannot be changed anymore.

When you use static, the reference is not resolved immediately. It is only resolved when you call User::getTableName(), at which point you're in the context of User, so static::$tableName is resolved to User::$tableName.

In other words: self always refers to the class that it has been written in, no two ways about it. What static refers to depends on what context it's used in; in practice that means it may refer to child classes if the class it occurs in is being extended. That makes it work like $this, only for static contexts.
*/

?>
