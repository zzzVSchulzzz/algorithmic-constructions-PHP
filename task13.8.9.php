//Напишите программу для вычисления суммы чисел от 1 до n с помощью рекурсии.

//Мой ответ
<?php

function sum(int $n)
{
    if ($n === 1) {
    	return 1;
    }
    
    $result = $n + sum($n-1);
    	return $result;
}

echo sum(5);
?>

//Решение 
/**
<?php

// if n = 5 then 1 + 2 + 3 + 4 + 5 = 15

function sumOfRange(int $n)
{
    if ($n === 1) {
        return 1;
    }
   
    $res = $n + sumOfRange($n - 1);
   
    return $res;
}

echo sumOfRange(5);
*/
