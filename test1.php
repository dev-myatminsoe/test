<?php

class Vehicle {

    private $type;
    private $speed;

    public function __construct(string $type, int $speed) {
        $this->type = $type;
        $this->speed = $speed;
    }

    public function getType() : string{
        return $this->type;
    }
    
    public function calculateTime(int $distance) : float {
        return $this->type == 'boat' ? ($distance / $this->speed) + 0.25 : $distance / $this->speed;
    }
}

$vehicles = [
    new Vehicle('sport-car', 150),
    new Vehicle('truck', 60),
    new Vehicle('bike', 100),
    new Vehicle('boat', 50),
];

$distance = 350;

foreach ($vehicles as $vehicle) {
    $time = $vehicle->calculateTime($distance);
    print($vehicle->getType() . ": " . $time . "\n");
}