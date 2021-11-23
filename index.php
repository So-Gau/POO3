<?php

require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'Bicycle.php';

$bartBike= new Bicycle('blue');
// $lisaBike= new Bicycle('green');
// $maggieBike= new Bicycle('orange');

$homerCar= new Car('pink', 5,'diesel');
// $margeCar= new Car('orange', 5, 'fuel');


 // $car = new Car('green', 4, 'electric');
// echo $car->forward();
//var_dump($car);

//$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();
//var_dump($bicycle);

//var_dump(Car::ALLOWED_ENERGIES);

$way = new PedestrianWay();

if($way->addVehicle($bartBike)) {
    echo "Bart can go on this way" . PHP_EOL;
} else {
    echo "Bart can *not* go on this way" . PHP_EOL;
}

$way = new PedestrianWay();

if($way->addVehicle($homerCar)) {
    echo "Homer can go this way" . PHP_EOL;
}else {
    echo "homer can *not* go on this way" . PHP_EOL;
}