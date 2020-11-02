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


try {
    $car2 = new Car('red', 4, 'electric');
    $car2->setHasParkBrake(1);
    $car2->setCurrentSpeed(80);

// Moving Cars
    echo $car2->start();
    echo '<br>';
    echo $car2->forward();
    echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car2->brake();
    echo '<br> Vitesse de la voiture : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car2->brake();
    echo '<br>';
    echo '<br>';
} catch(Exception $e) {
    echo $e->getMessage();
    echo '<br>';
} finally {
    echo 'Ma voiture roule comme un donut';
}