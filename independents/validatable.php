<?php

trait Validatable {
    public function validate($data) {
        return filter_var($data, FILTER_VALIDATE_EMAIL) ? "Валидный email" : "Неверный формат email";
    }
}

class RegistrationForm {
    use Validatable;
}

class LoginForm {
    use Validatable;
}


$registrationForm = new RegistrationForm();
print($registrationForm->validate("user@example.com") . "<br>");

$loginForm = new LoginForm();
print($loginForm->validate("invalid-email") . "<br>");
