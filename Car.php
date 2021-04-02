<?php

class Car
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;

    private string $fuelType;

    private int $fuelLevel;

    public function __construct(string $color, int $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;

    }

    public function start(): string
    {
        $this->currentSpeed = 0;

        return "Switched on";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
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

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getnbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setnbSeats(int $nbSeats): void
    {
        if ($nbSeats >= 0) {
            $this->nbSeats = $nbSeats;
        }
    }


    public function getnbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setnbWheels(int $nbWheels): void
    {
        if ($nbWheels >= 0) {
            $this->nbWheels = $nbWheels;
        }
    }

    public function getfuelType(): string
    {
        return $this->fuelType;
    }
    public function setfuelType(string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function getfuelLevel(): int
    {
        return $this->fuelLevel;
    }
    public function setfuelLevel(int $fuelLevel): void
    {
        if ($fuelLevel >= 0) {
            $this->fuelLevel = $fuelLevel;
        }
    }

}
