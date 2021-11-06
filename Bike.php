<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if($this->currentSpeed > 10){
            return "the dynamo turns on";
        }
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}

