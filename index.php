<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$myCar = new Car('red', 5, 'electric');

//$bike->setColor('blue');
$bike->setCurrentSpeed(0);

echo '<h3>Informations sur le vélo</h3>';
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>'  ;


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');
//$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
//$tornado->setColor('black');
$tornado->forward();

echo '<h3>Informations sur la voiture</h3>';
// Moving car
echo $myCar->start();
echo '<br> Vitesse de la voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->forward();
echo '<br> Vitesse de la voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();
echo '<br> Vitesse de la voiture : ' . $myCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $myCar->brake();
