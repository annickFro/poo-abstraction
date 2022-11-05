<?php

require_once 'HighWayAbstract.php';

final class ResidentialWay extends HighWayAbstract
{
    public function addVehicle(Vehicle $object): void
    {
        // every type of Vehicule allowed
        $this->currentVehicules[] = $object;
    }
}