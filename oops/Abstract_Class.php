<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method with no implementation
    abstract public function makeSound();

    // Normal method with implementation
    public function describe() {
        return "This animal's name is " . $this->name;
    }
}

class Dog extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        return "Bark";
    }
}

$dog = new Dog("Buddy");
echo $dog->describe(); // Outputs: This animal's name is Buddy
echo $dog->makeSound(); // Outputs: Bark
?>
