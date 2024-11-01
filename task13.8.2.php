//Напишите программу для проверки прибыли или убытка, используя if-elseif-else.

//Решение:
<?php
 $price = readline('Введите себестоимость ');
 $cost = readline('Введите стоимость продажи ');
 
 if($cost > $price) {
    $result = $cost - $price;
    echo "Прибыль: " .  $result;
 }elseif($cost < $price){
   $result = $price - $cost;
   echo "Убыток: " .  $result;
 }else{
   echo "Нет ни прибыли, ни убытка." ;
 };

//Ответ:
/** <?php
  $buy = readline('Введите стоимость покупки:');
  $sell = readline('Введите стоимость продажи:');
  
  if ($sell > $buy) {
      echo 'Прибыль ' . ($sell - $buy);
  } elseif($sell < $buy) {
      echo 'Убыток ' . ($buy - $sell);
  } else {
      echo 'Нет профита или убытка';
  }
  ?>*/
