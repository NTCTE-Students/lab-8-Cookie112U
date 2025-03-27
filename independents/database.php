<?php

interface Database {
    public function connect();
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect() {
        print("Подключение к MySQL<br>");
    }

    public function query($sql) {
        print("Выполнение запроса в MySQL: {$sql}<br>");
    }
}

class PostgreSQLDatabase implements Database {
    public function connect() {
        print("Подключение к PostgreSQL<br>");
    }

    public function query($sql) {
        print("Выполнение запроса в PostgreSQL: {$sql}<br>");
    }
}

class SQLiteDatabase implements Database {
    public function connect() {
        print("Подключение к SQLite<br>");
    }

    public function query($sql) {
        print("Выполнение запроса в SQLite: {$sql}<br>");
    }
}

$databases = [
    new MySQLDatabase(),
    new PostgreSQLDatabase(),
    new SQLiteDatabase()
];

foreach ($databases as $db) {
    $db->connect();
    $db->query("SELECT * FROM users");
}
