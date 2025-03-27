<?php

class Device {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getInfo() {
        return "Бренд: {$this->brand}, Модель: {$this->model}";
    }
}

class Smartphone extends Device {
    public function call() {
        return "Звонок с {$this->model}.";
    }
}
class Laptop extends Device {
    public function browse() {
        return "Просмотр веб-страниц на {$this->model}.";
    }
}
class Tablet extends Device {
    public function draw() {
        return "Рисование на {$this->model}.";
    }
}

$smartphone = new Smartphone("Apple", "iPhone 13");
print($smartphone->getInfo() . "<br>");
print($smartphone->call() . "<br>");

$laptop = new Laptop("Dell", "XPS 13");
print($laptop->getInfo() . "<br>");
print($laptop->browse() . "<br>");

$tablet = new Tablet("Samsung", "Galaxy Tab S7");
print($tablet->getInfo() . "<br>");
print($tablet->draw() . "<br>");
