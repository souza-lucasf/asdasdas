<?php


class Human{ 
    private $name;
    public $haircolor;
    public $gender;
    public $height;


    public function __construct($x, $y, $z, $w){

        $this->name = $x;
        $this->haircolor = $y;
        $this->gender = $z;
        $this->height = $w;
    }

    public function get_name(){
        return $this->name;
    }

    public function __toString()
    {
        return "Name: $this->name<br>
        Hair Color: $this->haircolor<br>
        Gender: $this->gender<br>
        Height: $this->height" . 'm<br>' . '<hr>';
    }

}
