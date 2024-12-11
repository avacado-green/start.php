<?php
class Book {
    private $title;
    private $author;
    private $year;
    private $genre;
    private $pages;
    private $isAvailable;

    public function __construct($title, $author, $year, $genre, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
        $this->pages = $pages;
        $this->isAvailable = true;
    }

    public function displayInfo() {
        echo "Название: " . $this->title . "\n";
        echo "Автор: " . $this->author . "\n";
        echo "Год издания: " . $this->year . "\n";
        echo "Жанр: " . $this->genre . "\n";
        echo "Количество страниц: " . $this->pages . "\n";
        echo "Статус: " . ($this->isAvailable ? "Доступна" : "Выдана") . "\n";
    }

    public function changeStatus($status) {
        if ($status == "выдана") {
            $this->isAvailable = false;
        } elseif ($status == "доступна") {
            $this->isAvailable = true;
        } else {
            echo "Некорректный статус.\n";
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getPages() {
        return $this->pages;
    }

    public function isAvailable() {
        return $this->isAvailable;
    }
}

$book1 = new Book("Война и мир", "Лев Толстой", 1869, "Роман", 1225);
$book1->displayInfo();
$book1->changeStatus("выдана");
$book1->displayInfo();
?>


