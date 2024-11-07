//Напишите программу для печати первых 20 целых чисел с использованием рекурсии.

//Мое решение
<?php

function firstTwennies(int $n)
{
    if ($n <= 20) {
        echo($n . PHP_EOL);
        firstTwennies($n + 1);
    }
}

firstTwennies(1);
?>

//Ответ
/**
<?php

function printNumbers(int $n)
{
    if ($n <= 20) {
        echo $n . "\n";
        printNumbers($n + 1);
    }   
}

printNumbers(1);
*/
