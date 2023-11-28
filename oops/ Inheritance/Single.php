class Vehicle {
    public $wheels;
}

class Car extends Vehicle {
    public $doors;
}

$myCar = new Car();
$myCar->wheels = 4;
$myCar->doors = 4;
