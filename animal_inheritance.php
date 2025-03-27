<?php

require_once 'animal_base.php';

// Производный класс Dog
class Dog extends Animal {
    public function bark() {
        print("{$this->name} говорит: Гав-гав!<br>");
    }
}

// Производный класс Cat
class Cat extends Animal {
    public function meow() {
        print("{$this->name} говорит: Мяу-мяу!<br>");
    }
}

// Демонстрация наследования
$dog = new Dog();
$dog->name = 'Бобик';
$dog->age = 3;
$dog->describe();
$dog->bark();

$cat = new Cat();
$cat->name = 'Мурка';
$cat->age = 2;
$cat->describe();
$cat->meow();

