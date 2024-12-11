<?php
class Ebook extends Book {
    private $fileFormat;
    private $fileSize;

    public function __construct($title, $author, $year, $genre, $pages, $fileFormat, $fileSize) {
        parent::__construct($title, $author, $year, $genre, $pages);
        $this->fileFormat = $fileFormat;
        $this->fileSize = $fileSize;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Формат файла: " . $this->fileFormat . "\n";
        echo "Размер файла: " . $this->fileSize . " MB\n";
    }

    public function download() {
        echo "Скачивание " . $this->getTitle() . " в формате " . $this->fileFormat . "...\n";
    }
}

$ebook1 = new Ebook("1984", "Джордж Оруэлл", 1949, "Антиутопия", 328, "PDF", 1.5);
$ebook1->displayInfo();
$ebook1->download();
?>
