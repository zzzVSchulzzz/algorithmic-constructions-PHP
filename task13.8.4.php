//Напишите программу для нахождения максимума между двумя числами, используя switch.

//Мое решение:
<?php

$num1 = readline("Введите число ");
$num2 = readline("Введите число ");
 
switch($num1 > $num2){
	case true:
		echo "$num1";
		break;
	case false: 
		echo "$num2";
		break;
	default:
		echo "$num1 || $num2";
};
?>

//Ответ:
/**
  <?php
  
  $n1 = readline('Введите первое число: ');
  $n2 = readline('Введите второе число: ');
  
  switch($n1 > $n2) {
      case true:
          $max = $n1;
          break;
      case false:
          $max = $n2;
          break;
      default:
          $max = $n1;
  }
  
  echo $max;
*/
