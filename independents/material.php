<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        return "Название: {$this->title}, Автор: {$this->author}";
    }
}
class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }

    public function getInfo() {
        return parent::getInfo() . ", Страниц: {$this->pages}";
    }
}
class Article extends Material {
    public function getInfo() {
        return parent::getInfo() . ", Это статья.";
    }
}
class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function getInfo() {
        return parent::getInfo() . ", Длительность: {$this->duration} минут";
    }
}
$book = new Book("PHP для начинающих", "Иван Иванов", 200);
print($book->getInfo() . "<br>");

$article = new Article("Разработка на PHP", "Сергей Петров");
print($article->getInfo() . "<br>");

$video = new Video("PHP видеоуроки", "Алексей Смирнов", 45);
print($video->getInfo() . "<br>");
