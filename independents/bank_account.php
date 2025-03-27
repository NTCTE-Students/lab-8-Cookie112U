<?php

class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = max(0, $balance); 
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            print("Ошибка: сумма для пополнения должна быть положительной.<br>");
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            print("Ошибка: недостаточно средств или некорректная сумма.<br>");
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }
}


$account = new BankAccount("123456789", 5000);
print("Счет №" . $account->getAccountNumber() . "<br>");
print("Начальный баланс: " . $account->getBalance() . " руб.<br>");

$account->deposit(2000);
print("После пополнения: " . $account->getBalance() . " руб.<br>");

$account->withdraw(3000);
print("После снятия: " . $account->getBalance() . " руб.<br>");

$account->withdraw(5000); 
