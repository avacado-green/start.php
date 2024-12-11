<?php
class AudioBook extends Book {
    private $duration;
    private $narrator;

    public function __construct($title, $author, $year, $genre, $pages, $duration, $narrator) {
        parent::__construct($title, $author, $year, $genre, $pages);
        $this->duration = $duration;
        $this->narrator = $narrator;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Длительность: " . $this->duration . " часов\n";
        echo "Диктор: " . $this->narrator . "\n";
    }

    public function play() {
        echo "Воспроизведение " . $this->getTitle() . " начато. Диктор: " . $this->narrator . "\n";
    }
}

$audiobook1 = new AudioBook("Гарри Поттер и философский камень", "Дж. К. Роулинг", 1997, "Фэнтези", 223, 8.5, "Стивен Фрай");
$audiobook1->displayInfo();
$audiobook1->play();
?>
