<?php

require_once 'Car.php';
require_once 'Bike.php';
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

$camaro = new Car('red', 4, 'fuel');
     if ($camaro->forward()) {
         echo $camaro->switchOn();
     }

$cityBike = new Bike('white', 1);
     if ($cityBike->setCurrentSpeed(2)) {
         echo $cityBike->switchOff();
     } elseif ($cityBike->setCurrentSpeed(10)) {
         echo $cityBike->switchOn();
     }








