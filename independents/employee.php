<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getInfo() {
        return "Имя: {$this->name}, Зарплата: {$this->salary}";
    }
}

class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} (Менеджер).";
    }
}

class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} (Разработчик).";
    }
}

class Designer extends Employee {
    public function designUI() {
        return "{$this->name} (Дизайнер).";
    }
}

$manager = new Manager("Алиса", 80000);
print($manager->getInfo() . "<br>");
print($manager->manageTeam() . "<br>");

$developer = new Developer("Джон", 60000);
print($developer->getInfo() . "<br>");
print($developer->writeCode() . "<br>");

$designer = new Designer("Кирилл", 50000);
print($designer->getInfo() . "<br>");
print($designer->designUI() . "<br>");
