<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'diesel'
    ];

    private string $energy;
    private int $storageCapacity;
    private int $chargement;

public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)

{
    $this->storageCapacity = $storageCapacity;
    $this->energy = $energy;
    parent::__construct($color, $nbSeats);
    $this->chargement = 0;
}

public function getEnergy(): string

{
    return $this->energy;
}


public function setEnergy(string $energy): car
{
    if (in_array($energy, self::ALLOWED_ENERGIES))
    {
        $this->energy = $energy;
    }
    return $this;
}

public function getStorageCapacity(): int

    {
        return $this->getstorageCapacity;
    }

    
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    
    public function isFull():string
    {
        if($this->storageCapacity === 50){
            return "full";
        } else
        {
            return "in filling";
        }
    }

    public function getChargement(): int
    {
        return $this->chargement;
    }

    public function setChargement (int $chargement): void
    {
        $this->chargement = $chargement;
    }

}