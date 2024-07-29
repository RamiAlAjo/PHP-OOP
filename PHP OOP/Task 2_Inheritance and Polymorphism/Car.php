<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    public function __construct()
    {
        parent::__construct("Car");
    }

    public function move()
    {
        echo "The car drives on four wheels.";
    }
}
