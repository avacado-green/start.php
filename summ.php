<?php
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return add($arg1, $arg2);
        case 'subtract':
            return subtract($arg1, $arg2);
        case 'multiply':
            return multiply($arg1, $arg2);
        case 'divide':
            return divide($arg1, $arg2);
        default:
            return "Invalid operation!";
    }
}


echo mathOperation(10, 5, 'add');
echo "\n";
echo mathOperation(10, 5, 'subtract');
echo "\n";
echo mathOperation(10, 5, 'multiply');
echo "\n";
echo mathOperation(10, 5, 'divide');
echo "\n";
echo mathOperation(10, 0, 'divide');
echo "\n";
echo mathOperation(10, 5, 'modulus');
?>
