<?php

class Orc extends Adventurer
{
    public function __construct($n)
    {
        parent::__construct($n);
        $this->warCry = "wwouogrouroulou mlll !!";
    }

    public function attack($opponent)
    {
        // Damage Orc will inflict to the opponent
        $damage = $this->atkPoints;

        // Check if opponent is an elf
        if (get_class($opponent) == 'Elf') {
            // Does the Elf carry a Shield?
            if ($opponent->equipment == null || ($opponent->equipment != null && $opponent->equipment->type != 'Shield'))
                $damage = 50;
        }

        $opponent->healthPoints -= $damage;

        echo $this->name . ' attacking ' . $opponent->name . '<br>';
    }

    public function usePower()
    {
        if ($this->didIUsePower == false) {
            $this->defPoints += 20;
            $this->atkPoints -= 10;
            $this->didIUsePower = true;
        } else
            echo 'You have already used the power<br>';
    }

    public function display_equipment()
    
    {
        echo $this->equipment;
    }
}