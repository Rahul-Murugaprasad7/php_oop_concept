<?php

// Final class
final class BaseClass {
    protected $message;

    public function __construct($message) {
        $this->message = $message;
    }

    final public function displayMessage() {
        echo $this->message . "\n";
    }
}

// Error: Cannot extend final class BaseClass
// class SubClass extends BaseClass {
// Class definition
// }

// Class extending a non-final class
class AnotherClass {
    public function someMethod() {
        echo "Some method in AnotherClass\n";
    }
}

// Class extending AnotherClass
class ExtendedClass extends AnotherClass {
    // Class definition
}

// Final method in a class
class ParentClass {
    public function regularMethod() {
        echo "Regular method in ParentClass\n";
    }

    final public function finalMethod() {
        echo "Final method in ParentClass\n";
    }
}

// Error: Cannot override final method ParentClass::finalMethod()
// class ChildClass extends ParentClass {
//     public function finalMethod() {
//         echo "Attempting to override final method in ChildClass\n";
//     }
// }

// Creating instances and demonstrating final class and method
$baseInstance = new BaseClass("Hello, I am a final class!");
$baseInstance->displayMessage();

$extendedInstance = new ExtendedClass();
$extendedInstance->someMethod();

$parentInstance = new ParentClass();
$parentInstance->regularMethod();
$parentInstance->finalMethod();

?>
