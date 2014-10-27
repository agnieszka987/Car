<?php

include('class.car.php');
include('class.engine.php');

$myEngine = new Engine();
$myEngine->setHP(3000);

$myCar = new Car();
$myCar
	->setEngine($myEngine->getHP())
	->setCapacity(5000)
;

echo "VMax: " . $myCar->getVMax() ."\n";
echo "Acceleration: " . $myCar->getAcceleration() . "\n";