<?php
function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    } elseif ($pow > 0) {
        return $val * power($val, $pow - 1);
    } else {
        return 1 / power($val, -$pow);
    }
}


echo power(2, 3);
echo "\n";
echo power(5, 0);
echo "\n";
echo power(2, -2);
echo "\n";
echo power(3, 4);
?>
