<?php

abstract class Order {
    protected $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    abstract public function calculateTotal();
}

class OnlineOrder extends Order {
    public function calculateTotal() {
        $total = $this->amount * 1.05; 
        print("Итоговая сумма онлайн-заказа: {$total} рублей<br>");
    }
}

class StoreOrder extends Order {
    public function calculateTotal() {
        $total = $this->amount * 1.1; 
        print("Итоговая сумма заказа в магазине: {$total} рублей<br>");
    }
}

class TelephoneOrder extends Order {
    public function calculateTotal() {
        $total = $this->amount * 1.02; 
        print("Итоговая сумма телефонного заказа: {$total} рублей<br>");
    }
}

$orders = [
    new OnlineOrder(1000),
    new StoreOrder(1000),
    new TelephoneOrder(1000)
];

foreach ($orders as $order) {
    $order->calculateTotal();
}
