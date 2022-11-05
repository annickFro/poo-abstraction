<?php

require_once 'HighWayAbstract.php';

final class MotorWay extends HighWayAbstract
{
    public function addVehicle(Vehicle $object): void
    {
        if ($object instanceof Bike || $object instanceof Skateboard) {
            echo "Bike or skate Not allowed on MotorWay  !!!!!! \n"  ;
        } else {
            $this->currentVehicules[] = $object;
        }
    }
}