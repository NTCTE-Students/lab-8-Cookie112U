<?php

class Vehicle {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
    }

    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}

class Car extends Vehicle {
    public $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this -> doors = $doors;
    }

    public function getInfo() {
        return parent::getInfo() . " with {$this->doors} doors";
    }
}

class Bike extends Vehicle {
    public $type;

    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this -> type = $type;
    }

    public function getInfo() {
        return parent::getInfo() . " which is a {$this->type} bike";
    }
}
class Truck extends Vehicle {
    public $loadCapacity;

    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this -> loadCapacity = $loadCapacity;
    }

    public function getInfo() {
        return parent::getInfo() . " with a load capacity of {$this->loadCapacity} tons";
    }
}

$car = new Car("Honda", "Civic", 2021, 4);
print("{$car->getInfo()}<br>");

$bike = new Bike("Trek", "Domane", 2022, "road");
print("{$bike->getInfo()}<br>");

$truck = new Truck("Volvo", "FH", 2020, 18);
print("{$truck->getInfo()}<br>");
