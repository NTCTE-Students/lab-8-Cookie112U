<?php

abstract class Payment {
    abstract public function process($amount);
}

class CreditCardPayment extends Payment {
    public function process($amount) {
        print("Оплата картой на сумму: {$amount} рублей<br>");
    }
}

class PayPalPayment extends Payment {
    public function process($amount) {
        print("Оплата через PayPal на сумму: {$amount} рублей<br>");
    }
}

class BankTransferPayment extends Payment {
    public function process($amount) {
        print("Банковский перевод на сумму: {$amount} рублей<br>");
    }
}

$payments = [
    new CreditCardPayment(),
    new PayPalPayment(),
    new BankTransferPayment()
];

foreach ($payments as $payment) {
    $payment->process(1500);
}
