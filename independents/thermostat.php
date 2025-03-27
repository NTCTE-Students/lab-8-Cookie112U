<?php

class Thermostat {
    private $temperature;

    public function __construct($temperature = 20) {
        $this->setTemperature($temperature);
    }

    public function setTemperature($temperature) {
        if ($temperature >= 10 && $temperature <= 30) {
            $this->temperature = $temperature;
        }
    }

    public function getTemperature() {
        return $this->temperature;
    }
}


$thermostat = new Thermostat();
$thermostat->setTemperature(25);
print("Температура: " . $thermostat->getTemperature() . "°C<br>");
