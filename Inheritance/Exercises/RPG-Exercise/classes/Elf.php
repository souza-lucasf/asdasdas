<?php

class Elf extends Adventurer
{
    public function attack($opponent)
    {
        $damage = $this->atkPoints;

        if ($this->equipment != null && $this->equipment->type == 'Sword')
            $damage += 2;

        $opponent->healthPoints -= $damage;

        echo $this->name . ' attacking ' . $opponent->name . '<br>';
    }

    public function usePower()
    {
        if ($this->didIUsePower == false) {
            $this->speed += 3;
            $this->didIUsePower = true;
        }
    }

    public function display_equipment()
    
    {
        echo $this->equipment;
    }

}

