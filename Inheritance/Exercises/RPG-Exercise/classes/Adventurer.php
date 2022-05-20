<?php

abstract class Adventurer
{
    public $name;
    public $healthPoints;
    public $defPoints;
    public $atkPoints;
    public $warCry;
    public $equipment;
    public $speed;
    public $didIUsePower;

    public function __construct($n)
    {
        $this->name = $n;
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->warCry = "Attaaaaaack!";
        $this->speed = 10;
        $this->didIUsePower = false;
    }

    // dependency injection
    public function add_equipment($equip)
    {
        $this->equipment = $equip;
    }

    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo $this->equipment;
    }

    public abstract function attack($opponent);
    public abstract function usePower();

    public function __toString()
    {
        return $this->name;
    }
}