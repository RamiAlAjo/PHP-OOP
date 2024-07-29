<?php
class Vehicle
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function move()
    {
        echo "The vehicle moves.";
    }
}
