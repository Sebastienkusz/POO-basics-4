<?php
// index.php

require_once 'Bicycle.php';
require_once 'Cars.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
$bicycle->setCurrentSpeed(40);

$car = new Car('green', 4, 'electric');
$car->setCurrentSpeed(100);

$truck = new Truck('green', '3', 'gasoline', '200');
$truck->setLoading('50');
$truck->setCurrentSpeed(80);

// Moving bike
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br>';
echo '<br>';

// Moving Cars
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br>';
echo '<br>';

// Moving truck
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Contrôle du chargement : ' . $truck->getLoading() ;
echo '<br>';
echo '<br>';