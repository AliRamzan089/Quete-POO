<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function switchOn(): bool
    {
       return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}