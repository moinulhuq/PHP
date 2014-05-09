<?php

/*

What is the difference between new self and new static?

self refers to the same class whose method the new operation takes place in.

static in PHP 5.3's late static bindings refers to whatever class in the hierarchy which you call the method on.

In the following example, B inherits both methods from A. self is bound to A because it's defined in A's implementation of the first method, whereas static is bound to the called class (also see get_called_class()).

*/


class ParentClass {

    public static function get_self() {
        return new self();
    }

    public static function get_static() {
        return new static();
    }
}

class ChildClass extends ParentClass {

}

echo get_class(ChildClass::get_self());  // ParentClass
echo get_class(ChildClass::get_static()); // ChildClass
echo get_class(ParentClass::get_static()); // ParentClass

?>
