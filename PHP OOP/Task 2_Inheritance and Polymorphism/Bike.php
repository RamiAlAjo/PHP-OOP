<?php
require_once 'Vehicle.php';

class Bike extends Vehicle
{
    public function __construct()
    {
        parent::__construct("Bike");
    }

    public function move()
    {
        echo "The bike rides on two wheels.";
    }
}
