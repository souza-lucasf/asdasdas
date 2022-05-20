<?php

class Human extends Adventurer
{
    public function attack($opponent)
    {
        $damage = $this->atkPoints;

        if ($this->equipment == null)
            $damage += 3;

        $opponent->healthPoints -= $damage;

        echo $this->name . ' attacking ' . $opponent->name . '<br>';
    }

    public function usePower()
    {

        if ($this->didIUsePower == false) {
            $this->healthPoints += 20;
            $this->didIUsePower = true;
        }
    }

    public function display_equipment()
    
    {
        echo $this->equipment;
    }
}