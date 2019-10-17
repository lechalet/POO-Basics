<?php

class Voiture
{
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    // fonction construct
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function start()
    {
        return 'Vrooum';
    }

    public function brake()
    {
        return 'je frene maméne';
    }
    public function forward()
    {
        return 'Calme cousin';
    }

    // Getters and Setters 

    public function getNbWheels()
    {
        $this->nbWheels = $nbWheels;
    }
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed()
    {
        $this->currentSpeed = $nbWheelcurrentSpeed;
    }
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }
    
    public function getColor()
    {
        $this->color = $color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getNbSeats()
    {
        $this->nbSeats = $nbSeats;
    }
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy()
    {
        $this->energy = $energy;
    }
    public function setEnergy($energy)
    {
        $this->energy = $energy;
    }

    public function getLevelEnergy()
    {
        $this->levelEnergy = $levelEnergy;
    }
    public function setLevelEnergy($levelEnergy)
    {
        $this->levelEnergy = $levelEnergy;
    }
}
