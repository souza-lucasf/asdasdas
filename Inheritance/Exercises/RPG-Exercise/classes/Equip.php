<?php

class Equipment
{
    public $name;
    public $type;
    public $atkBonus;
    public $defBonus;
    public $healthBonus;

    public function __construct($n, $t, $atk, $def, $health)
    {
        $this->name = $n;
        $this->type = $t;
        $this->atkBonus = $atk;
        $this->defBonus = $def;
        $this->healthBonus = $health;
    }

    public function __toString()
    {
        return 'Equipment informations : <br>
        Name : ' . $this->name . '<br>
        Type : ' . $this->type . '<br>
        Atk : ' . $this->atkBonus . '<br>
        Def : ' . $this->defBonus . '<br>
        Health : ' . $this->healthBonus;
    }
}