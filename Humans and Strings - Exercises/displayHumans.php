<?php

/*
  
An human is represented by a name, an haircolor, a gender and a height.
Create the matching class.
The name should not be editable after creation of the object.
Create two different object from this class.
*/


require_once 'Human.php';

echo $firstPerson = new Human('Ronald', 'blue', 'male', 1.73);


echo $secondPerson = new Human('Mary', 'orange','female',  1.58);

    