<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';

$bicycle = new Bicycle('blue', 1);
$bicycle->setCurrentSpeed(20);
$bicycle2 = new Bicycle('red', 1);
$bicycle2->setCurrentSpeed(10);

$car = new Car('green', 4, 'electric');
$car->setCurrentSpeed(100);

$truck = new Truck('green', '3', 'gasoline', '200');
$truck->setLoading('50');
$truck->setCurrentSpeed(80);

// Moving bicycles and car in PedestrianWay
$pedestrian = new PedestrianWay('1','30');
$pedestrian->addVehicle($bicycle);
$pedestrian->addVehicle($bicycle2);
$pedestrian->addVehicle($car);
echo '<pre>';
var_dump($pedestrian);
echo '</pre>';
echo '<br>';
echo '<br>';

// Moving Bicycle, Car and Truck in ResidentialWay
$residential = new ResidentialWay('2','50');
$residential->addVehicle($bicycle);
$residential->addVehicle($car);
$residential->addVehicle($truck);
echo '<pre>';
var_dump($residential);
echo '</pre>';
echo '<br>';
echo '<br>';


// Moving Bicycle, Car and Truck in MotorWay
$motorway = new MotorWay('2','50');
$motorway->addVehicle($bicycle);
$motorway->addVehicle($car);
$motorway->addVehicle($truck);
echo '<pre>';
var_dump($motorway);
echo '</pre>';
echo '<br>';
echo '<br>';
