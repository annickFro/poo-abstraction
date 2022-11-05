<?php
abstract class HighWayAbstract
{
    // properties
    protected array $currentVehicules;
    protected int $nbLane;
    protected int $maxSpeed;

    // methods
    public function __construct(string $nbLane, int $maxSpeed)
    {
        $this->currentVehicules = [] ;
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * addVehicle
     */
    abstract public function addVehicle(Vehicle $object): void;

    /**
     * Get the value of currentVehicules
     */ 
    public function getCurrentVehicules()
    {
        return $this->currentVehicules;
    }

    /**
     * Set the value of currentVehicules
     *
     * @return  self
     */ 
    public function setCurrentVehicules($currentVehicules)
    {
        $this->currentVehicules = $currentVehicules;

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}