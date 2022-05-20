<?php

class CoffeeCup {
    private $quantity;
    private $brand;
    private $temperature;
    private $volume;



    public function __construct($q, $b, $t, $v){

        $this->set_quantity($q);
        $this->set_brand($b);
        $this->set_temperature($t);
        $this->volume=$v;
    }

    public function get_volume(){
        return $this->volume;
    }

    public function set_quantity($newQuantity)
    {
        // Make sure the Quantity is a string
        if (is_numeric($newQuantity))
            $this->quantity = $newQuantity;
        else
            echo '<span style="color:red;">Quantity must be a number</span><br>';
    }

    public function get_quantity(){
        return $this->quantity;
    }


    public function set_brand($newBrand)
    {
        // Make sure the Brand is a string
        if (is_string($newBrand))
            $this->brand = $newBrand;
        else
            echo '<span style="color:red;">Brand must be a string</span><br>';
    }

    public function get_brand(){
        return $this->brand;
    }


    public function set_temperature($newTemperature)
    {
        // Make sure the Temperature is a string
        if (is_numeric($newTemperature))
            $this->temperature = $newTemperature;
        else
            echo '<span style="color:red;">Temperature must be a number</span><br>';
    }

    public function get_temperature(){
        return $this->temperature;
    }


    // public function set_volume($newVolume)
    // {
    //     // Make sure the volume is a string
    //     if (is_numeric($newVolume))
    //         $this->volume = $newVolume;
    //     else
    //         echo '<span style="color:red;">Volume must be a number</span><br>';
    // }




    public function __toString()
    {
        return "<span style='color:blue; font-weight: bold;'>Coffee:</span><br>
        Quantity: $this->quantity cl<br>
        Brand: $this->brand<br>
        Temperature: $this->temperature °C<br>
        Volume: $this->volume cl<br> <hr>";
    }

    // public function __toString()
    // {
    //     return "Volume: $this->volume cl<br>";
    // }





    public function sip($clToDrink) {
        if(is_int($clToDrink)){
            $this->quantity -= $clToDrink;
		echo "Remain $clToDrink" . "cl of coffee";
        }
        else{
            echo "Sip must be an integer";
        }
	}

    public function refill(){
        $this->quantity = $this->volume;
        echo 'Mug full again';
    }




}


