<?php

class Animal {
    public function eat() {
        return "Животное ест.";
    }

    public function sleep() {
        return "Животное спит.";
    }
}

class Bird extends Animal {
    public function fly() {
        return "Птица летит.";
    }
}

class Fish extends Animal {
    public function swim() {
        return "Рыба плавает.";
    }
}

class Mammal extends Animal {
    public function run() {
        return "Млекопитающее бегает.";
    }
}

$bird = new Bird();
print($bird->eat() . "<br>");
print($bird->fly() . "<br>");

$fish = new Fish();
print($fish->eat() . "<br>");
print($fish->swim() . "<br>");

$mammal = new Mammal();
print($mammal->eat() . "<br>");
print($mammal->run() . "<br>");
