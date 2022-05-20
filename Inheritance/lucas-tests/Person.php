<?php

class Person {
    //Properties
    private $name;
    private $gender;
    private $age;


    //Construct
    public function __construct($n, $g, $a){
        $this->name =$n;
        $this->gender =$g;
        $this->age=$a;

    }


    //Setters
    public function setName($setName){
        $this->name = $setName;

    }
    public function setGender($setGender){
        $this->name = $setGender;
    }
    public function setAge($setAge){
        $this->name = $setAge;
    }

    //Getters




    //Methods
    public function birthday(){
        echo 'Happy bday, ' . $this->name . '!';
    }
    
}