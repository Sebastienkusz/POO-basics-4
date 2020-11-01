<?php
// index.php

require_once 'Car.php';

try {
$car = new Car('green', 4, 'electric');
$car->setHasParkBrake(0);
$car->setCurrentSpeed(50);


// Moving Cars
    echo $car->start();
    echo '<br>';
    echo $car->forward();
    echo '<br>';
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();
    echo '<br>';
    echo '<br>';
} catch(Exception $e) {
    echo $e->getMessage();
    echo '<br>';
} finally {
    echo 'Ma voiture roule comme un donut';
}
