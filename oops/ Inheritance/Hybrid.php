//In PHP, traits can be used to simulate multiple inheritance. Traits are a mechanism for code reuse in single inheritance languages like PHP.
<?php
trait EngineTrait {
    public function startEngine() {
        echo "Engine started";
    }
}

class Vehicle {
    public $wheels;
}

class Car extends Vehicle {
    use EngineTrait;
    public $doors;
}

$myCar = new Car();
$myCar->startEngine(); // Using trait method
?>
