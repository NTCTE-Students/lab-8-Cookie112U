<?php

interface Notifier {
    public function send($message);
}

class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}

class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}

class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка Push-уведомления: {$message}<br>");
    }
}

$notifiers = [
    new EmailNotifier(),
    new SMSNotifier(),
    new PushNotifier()
];

foreach ($notifiers as $notifier) {
    $notifier->send("Важное сообщение!");
}
