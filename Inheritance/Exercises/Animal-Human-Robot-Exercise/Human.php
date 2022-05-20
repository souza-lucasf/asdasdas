<?php

class Human extends LivingBeing{
    private $name;
    private $color;
    private $gender;

    public function __construct($n, $c, $g){
        $this->name=$n;
        $this->color=$c;
        $this->gender=$g;
    }

    public function work(){
        echo "$this->name says: Work hard, play harder!";
    }
    
}



