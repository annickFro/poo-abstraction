<?php

require_once 'HighWayAbstract.php';

final class PedestrianWay extends HighWayAbstract
{
    public function addVehicle(Vehicle $object): void
    {
        if ($object instanceof Bike || $object instanceof Skateboard) {
            $this->currentVehicules[] = $object;
        } else {
            echo "Only bikes and skates are allowed on PedestrianWay  !!!!!! \n"  ;
        }
    }
}