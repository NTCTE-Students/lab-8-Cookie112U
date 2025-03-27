<?php

trait Authenticatable {
    public function login($username) {
        print("Пользователь {$username} вошел в систему.<br>");
    }

    public function logout() {
        print("Пользователь вышел из системы.<br>");
    }
}
class User {
    use Authenticatable;
    
    private $username;

    public function __construct($username) {
        $this->username = $username;
    }
}

$user = new User("Иван");
$user->login("Иван");
$user->logout();
