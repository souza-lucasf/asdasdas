<?php

require_once 'Person.php';

class Teacher extends Person{

}



$firstTeacher = new Person('Sylvia', 'female', 54);

echo '<pre>';
print_r($firstTeacher);
echo '<pre>';

$firstTeacher->birthday();