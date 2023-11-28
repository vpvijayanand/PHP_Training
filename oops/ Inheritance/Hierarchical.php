class Vehicle {
    public $wheels;
}

class Car extends Vehicle {
    public $doors;
}

class Truck extends Vehicle {
    public $cargoCapacity;
}

$myCar = new Car();
$myCar->wheels = 4;

$myTruck = new Truck();
$myTruck->wheels = 6;
$myTruck->cargoCapacity = 1000;
