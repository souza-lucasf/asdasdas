<?php

require_once './classes/Adventurer.php';
require_once './classes/Human.php';
require_once './classes/Orc.php';
require_once './classes/Elf.php';
require_once './classes/Equip.php';

$orc = new Orc('John');
$elf = new Elf('Legolas');
$simon = new Human('Simon');

// $shield = new Equipment("Big Shield", "Shield", 0, 10, 0);
// $elf->add_equipment($shield);

// $orc->usePower();


echo $orc;


// $orc->attack($elf);
// $simon->attack($orc);




// $sword = new Equipment("Death Sword", "Sword", 10, 0, 0);
// $jewel = new Equipment("Grace Necklace", "Jewelry", 0, 0, 5);

// echo '<pre>';
// print_r($sword);
// echo '</pre>';

// $elf->add_equipment($sword);
// $elf->display_equipment();