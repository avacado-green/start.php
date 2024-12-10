<?php
function findBirthdaysToday($filename) {
    $today = date('d-m');

    if (!file_exists($filename)) {
        echo "Файл не найден.\n";
        return;
    }

    $file = fopen($filename, 'r');
    if (!$file) {
        echo "Не удалось открыть файл для чтения.\n";
        return;
    }

    $found = false;
    while (($line = fgets($file)) !== false) {
        list($name, $date) = explode(', ', trim($line));
        $birthDate = DateTime::createFromFormat('d-m-Y', $date);
        if ($birthDate && $birthDate->format('d-m') === $today) {
            echo "$name празднует день рождения сегодня!\n";
            $found = true;
        }
    }

    fclose($file);

    if (!$found) {
        echo "Сегодня ни у кого нет дня рождения.\n";
    }
}

// Пример использования
findBirthdaysToday('data.txt');
?>
