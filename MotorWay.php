<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay {

    public function __construct() 
    {
        parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle): bool
    {
        if(!($vehicle instanceof Bicycle) && !($vehicle instanceof Skateboard))
        {
            $this->currentVehicles [] = $vehicle;
            return true;
        }
        return false;
    }
}