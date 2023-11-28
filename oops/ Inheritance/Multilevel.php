class Vehicle {
    public $wheels;
}

class Car extends Vehicle {
    public $doors;
}

class SportsCar extends Car {
    public $turbo;
}

$mySportsCar = new SportsCar();
$mySportsCar->wheels = 4;
$mySportsCar->doors = 2;
$mySportsCar->turbo = true;
