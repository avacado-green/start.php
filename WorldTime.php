<?php
function getCurrentTimeWithDeclensions() {
    $hours = (int)date('G');
    $minutes = (int)date('i');

    function getDeclension($number, $one, $two, $five) {
        $n = abs($number) % 100;
        $n1 = $n % 10;
        if ($n > 10 && $n < 20) {
            return $five;
        }
        if ($n1 > 1 && $n1 < 5) {
            return $two;
        }
        if ($n1 == 1) {
            return $one;
        }
        return $five;
    }

    $hoursDeclension = getDeclension($hours, 'час', 'часа', 'часов');
    $minutesDeclension = getDeclension($minutes, 'минута', 'минуты', 'минут');

    return "$hours $hoursDeclension $minutes $minutesDeclension";
}


echo getCurrentTimeWithDeclensions();
?>
