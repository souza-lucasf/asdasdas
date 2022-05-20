<?php

require_once 'CoffeeCup.php';

$myCoffee = new CoffeeCup(20);


$myCoffee->set_quantity(20);
$myCoffee->set_Brand('Malongo');
$myCoffee->set_Temperature(65);

echo $myCoffee->get_quantity() . 'cl<br>';
echo $myCoffee->get_Brand() . '<br>';
echo $myCoffee->get_Temperature() . '°C<br><hr>';





// echo $myCoffee->sip(3) . '<br><hr>';
// echo $myCoffee->refill() . '<br><hr>';



$yourCoffee = new CoffeeCup(20);

echo  $yourCoffee;

// $otherCoffee = new CoffeeCup(33);
// echo $yourCoffee->volume;






// echo $myCoffee = new CoffeeCup(20, 'Malongo', 65, 33);
