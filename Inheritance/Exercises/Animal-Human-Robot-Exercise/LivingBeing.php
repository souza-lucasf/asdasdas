<?php

class LivingBeing {

    private $color;
    private $gender;
    private $name;

    public function __construct($n, $c, $g){
        $this->name=$n;
        $this->color=$c;
        $this->gender=$g;
    }
}