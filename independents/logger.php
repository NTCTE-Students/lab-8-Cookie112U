<?php

trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;
    
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
        $this->log("Создан пользователь {$this->name}.");
    }

    public function createUser() {
        $this->log("Пользователь {$this->name} зарегистрирован.");
    }
}

class Order {
    use Logger;

    private int $id;

    public function __construct(int $id) {
        $this->id = $id;
        $this->log("Создан заказ №{$this->id}.");
    }

    public function createOrder() {
        $this->log("Заказ №{$this->id} обработан.");
    }
}

class Product {
    use Logger;

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
        $this->log("Добавлен товар '{$this->name}'.");
    }

    public function createProduct() {
        $this->log("Товар '{$this->name}' в наличии.");
    }
}

$user = new User("Иван");
$user->createUser();

$order = new Order(123);
$order->createOrder();

$product = new Product("Ноутбук");
$product->createProduct();
