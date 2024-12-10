<?php
function validateDate($date, $format = 'd-m-Y') {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

function writeDataToFile($filename, $name, $date) {
    // Проверка валидности даты
    if (!validateDate($date)) {
        echo "Некорректная дата. Пожалуйста, введите дату в формате dd-mm-yyyy.\n";
        return;
    }

    $data = "$name, $date\n";
    $file = fopen($filename, 'a');
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Данные успешно сохранены.\n";
    } else {
        echo "Не удалось открыть файл для записи.\n";
    }
}

// Пример использования
writeDataToFile('data.txt', 'Василий Васильев', '05-06-1992'); // корректные данные
writeDataToFile('data.txt', 'Анна Иванова', '12-50-1548'); // некорректные данные
?>
