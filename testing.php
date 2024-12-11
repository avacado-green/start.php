<?php
require_once 'Ebook.php';
require_once 'PhysicalBook.php';

$ebook = new Ebook("1984", "Джордж Оруэлл", 1949, "Антиутопия", "https://example.com/download/1984");
$physicalBook = new PhysicalBook("Война и мир", "Лев Толстой", 1869, "Роман", "Библиотека №1, ул. Пушкина, д. 12");

$ebook->displayInfo();
echo $ebook->getAccessMethod() . "\n";
$ebook->incrementReadCount();
$ebook->displayInfo();

$physicalBook->displayInfo();
echo $physicalBook->getAccessMethod() . "\n";
$physicalBook->incrementReadCount();
$physicalBook->displayInfo();
?>
