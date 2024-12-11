<?php
class PhysicalBook extends Book {
    private $libraryAddress;

    public function __construct($title, $author, $year, $genre, $libraryAddress) {
        parent::__construct($title, $author, $year, $genre);
        $this->libraryAddress = $libraryAddress;
    }

    public function getAccessMethod() {
        return "Адрес библиотеки: " . $this->libraryAddress;
    }
}
?>
