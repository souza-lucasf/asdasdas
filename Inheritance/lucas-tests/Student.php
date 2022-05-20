<?php

require_once 'Person.php';

class Student extends Person{

}



$firstStudent = new Person('Julio', 'male', 17);

echo '<pre>';
print_r($firstStudent);
echo '<pre>';

$firstStudent->birthday();