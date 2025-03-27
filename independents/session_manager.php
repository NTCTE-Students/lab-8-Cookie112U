<?php

class SessionManager {
    public function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public function get($key) {
        return $_SESSION[$key] ?? null;
    }

    public function destroySession() {
        session_unset();
        session_destroy();
    }
}


$session = new SessionManager();
$session->startSession();
$session->set("user", "Алексей");
print("Пользователь: " . $session->get("user") . "<br>");
