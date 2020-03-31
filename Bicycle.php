<?php

class Bicycle
{
    private $color;

    private $currentSpeed;

    public $nbSeats = 1;

    public $nbWheels = 2;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $color) : void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }


    public function forward()
    {
        $this->currentSpeed = 15;
        return "GO !";
    }

    public function brake() : string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);

    }

}