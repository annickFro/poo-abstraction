<?php

require_once 'Vehicle.php' ;
require_once 'Car.php' ;
require_once 'Truck.php' ;
require_once 'Bike.php' ;
require_once 'Skateboard.php' ;
require_once 'HighWayAbstract.php' ;
require_once 'MotorWay.php' ;
require_once 'PedestrianWay.php' ;
require_once 'ResidentialWay.php' ;

$car = new Car('green', 4, 'fuel');
$clio = new Car('rouge', 4, 'fuel') ;
$myTruck = new Truck('grey', 3, 'fuel', 38000);
$myBike = new Bike('rose', 1);
$mySkate = new Skateboard('violet', 4);

$myMotorWay = new MotorWay(4,130) ;
//var_dump($myMotorWay);
$myMotorWay->addVehicle($car) ;
$myMotorWay->addVehicle($clio) ;
$myMotorWay->addVehicle($myBike) ;
$myMotorWay->addVehicle($mySkate) ;
print_r($myMotorWay);


$myPedestrianWay = new PedestrianWay(1, 10) ;
$myPedestrianWay->addVehicle($car) ;
$myPedestrianWay->addVehicle($clio) ;
$myPedestrianWay->addVehicle($myBike) ;
$myPedestrianWay->addVehicle($mySkate) ;
print_r($myPedestrianWay);

$myResidentialWay = new ResidentialWay(2, 50) ;
$myResidentialWay->addVehicle($car) ;
$myResidentialWay->addVehicle($clio) ;
$myResidentialWay->addVehicle($myBike) ;
$myResidentialWay->addVehicle($mySkate) ;
print_r($myResidentialWay);
