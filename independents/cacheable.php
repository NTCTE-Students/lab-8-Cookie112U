<?php

trait Cacheable {
    private $cache = [];

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }

    public function getCache($key) {
        return $this->cache[$key] ?? "Данные отсутствуют";
    }
}

class DataProvider {
    use Cacheable;
}

class ProductRepository {
    use Cacheable;
}

$dataProvider = new DataProvider();
$dataProvider->setCache("users", ["Иван", "Мария"]);
print_r($dataProvider->getCache("users"));
print("<br>");

$productRepo = new ProductRepository();
$productRepo->setCache("products", ["Телефон", "Ноутбук"]);
print_r($productRepo->getCache("products"));
print("<br>");
