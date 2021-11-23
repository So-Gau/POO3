<?php

require_once "Vehicle.php";

abstract class HighWay
{
 protected array $currentVehicles;
 protected int $nbLane;
 protected int $maxSpeed;

 public function __construct(int $nbLane, int $maxSpeed)
 {
     $this->nbLane = $nbLane;
     $this->maxSpeed = $maxSpeed;
 }

    abstract public function addVehicle(Vehicle $vehicle): bool;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}

