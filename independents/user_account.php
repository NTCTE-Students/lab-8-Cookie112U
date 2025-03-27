<?php

class User {
    private $username;
    private $passwordHash;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->setPassword($password);
    }

    public function setPassword($password) {
        $this->passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }

    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }
}

$user = new User("Алексей", "secret123");
print($user->checkPassword("secret123") ? "Пароль верный" : "Неверный пароль");
print("<br>");
