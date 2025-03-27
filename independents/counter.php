<?php

class Counter {
    private $count = 0;

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function reset() {
        $this->count = 0;
    }

    public function getCount() {
        return $this->count;
    }
}


$counter = new Counter();

$counter->increment();
print("После первого увеличения: " . $counter->getCount() . "<br>");

$counter->increment();
print("После второго увеличения: " . $counter->getCount() . "<br>");

$counter->decrement();
print("После уменьшения: " . $counter->getCount() . "<br>");

$counter->reset();
print("После сброса: " . $counter->getCount() . "<br>");



/*  session_start();

class Counter {
    private $count;

    public function __construct() {
        $this->count = $_SESSION['count'] ?? 0;
    }

    public function increment() {
        $this->count++;
        $_SESSION['count'] = $this->count;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
            $_SESSION['count'] = $this->count;
        }
    }

    public function getCount() {
        return $this->count;
    }

    public function reset() {
        $this->count = 0;
        $_SESSION['count'] = 0;
    }
}

$counter = new Counter();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['increment'])) {
        $counter->increment();
    } elseif (isset($_POST['decrement'])) {
        $counter->decrement();
    } elseif (isset($_POST['reset'])) {
        $counter->reset();
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счётчик</title>
</head>
<body>
    <h2>Счётчик: <?php print($counter->getCount()); ?></h2>
    <form method="post">
        <button type="submit" name="increment">+</button>
        <button type="submit" name="decrement">-</button>
        <button type="submit" name="reset">Сброс</button>
    </form>
</body>
</html>
 */