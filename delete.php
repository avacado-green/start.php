<?php
function deleteEntry($filename, $searchTerm) {
    if (!file_exists($filename)) {
        echo "Файл не найден.\n";
        return;
    }

    $file = file($filename);
    $newFile = [];
    $deleted = false;

    foreach ($file as $line) {
        if (strpos($line, $searchTerm) === false) {
            $newFile[] = $line;
        } else {
            $deleted = true;
        }
    }

    if ($deleted) {
        file_put_contents($filename, implode("", $newFile));
        echo "Запись успешно удалена.\n";
    } else {
        echo "Запись не найдена.\n";
    }
}

// Пример использования
deleteEntry('data.txt', 'Василий Васильев'); // удаление по имени
deleteEntry('data.txt', '05-06-1992'); // удаление по дате
?>
