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
