<?php

class Robot {
    private $id;
    private $color;


    public function __construct($i, $c){
        $this->id=$i;
        $this->color=$c;
    }


    public function work(){
        echo 'Work hard, play harder!';
    }
    
}



