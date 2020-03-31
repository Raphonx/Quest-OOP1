<?php

class Car
{

    private $nbWheels = 4;
    private $currentSpeed = 0;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel = 100 ;

    public function __construct( string $color, int $nbSeats , string $energy )
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return int
     */
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @return int
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function start()
    {
        $this->currentSpeed = 0;
        $this->currentSpeed ++;
        return "START";

    }

    public function forward()
    {
        $sentence = "";
        if ($this->currentSpeed > 0) {
            while ($this->currentSpeed < 15) {
                $this->currentSpeed++;
                $sentence .= "GO";
            }
            $sentence .= '<br>'."I'm so fasttttt !";
            return $sentence;
        }
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= '<br>'."I'm stopped !";
        return $sentence;
    }
}