//Напишите программу, которая делит число 10 на n и останавливает программу с сообщением "No way!" при ошибке деления, используя try-catch.

//Мой ответ:
<?php

$num = readline("Введите число ");

try {
	$result = 10 / $num;
	echo "$result";
} catch(DivisionByZeroError $error) {
	echo "No way!";
}

//Ответ
/**
<?php

$dividend = 10;
$divisor = readline('n? ');

try {
    $result = intdiv($dividend, $divisor);
    echo "$dividend / $divisor = $result\n";
} catch (DivisionByZeroError $error) {
    throw new Exception('No way!');
}

echo 'Программа завершена успешно.';
*/
