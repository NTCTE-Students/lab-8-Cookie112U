<?php

abstract class Document {
    abstract public function save($filename);
}

class PDFDocument extends Document {
    public function save($filename) {
        print("Сохранение документа {$filename}.pdf<br>");
    }
}

class WordDocument extends Document {
    public function save($filename) {
        print("Сохранение документа {$filename}.docx<br>");
    }
}

class ExcelDocument extends Document {
    public function save($filename) {
        print("Сохранение документа {$filename}.xlsx<br>");
    }
}

$documents = [
    new PDFDocument(),
    new WordDocument(),
    new ExcelDocument()
];

foreach ($documents as $doc) {
    $doc->save("Отчёт");
}
