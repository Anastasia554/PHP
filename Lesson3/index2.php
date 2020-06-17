<?php
echo ("<h3> Задание №1 </h3>") . "<br>" ;/* Объявить две целочисленные переменные $a и $b и задать им 
произвольные начальные значения. Затем написать скрипт, который 
работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;*/
    
     
$a = 1;
$b = -3;
if ($a >= 0 and $b >=0) {
     echo ($a - $b) . "<br>" ;     
}elseif ($a < 0 and $b < 0) {
echo( $a * $b) . "<br>";
    }else {
echo( $b + $a) . "<br>";   
};

echo ("<h3> Задание №2 </h3>") . "<br>"; /* Присвоить переменной $а значение в промежутке [0..15]. 
С помощью оператора sarg_3itch организовать вывод чисел от $a до 15.*/
$c = 16;
switch ($c) {
    case 0: echo 0 . "<br>";
    case 1: echo 1 . "<br>";
    case 2: echo 2 . "<br>";
    case 3: echo 3 . "<br>";
    case 4: echo 4 . "<br>";
    case 5: echo 5 . "<br>";
    case 6: echo 6 . "<br>";
    case 7: echo 7 . "<br>";
    case 8: echo 8 . "<br>";
    case 9: echo 9 . "<br>";
    case 10: echo 10 . "<br>";
    case 11: echo 11 . "<br>";
    case 12: echo 12 . "<br>";
    case 13: echo 13 . "<br>";
    case 14: echo 14 . "<br>";
    case 15: echo 15 . "<br>";
break;
    default:
       echo "C не входит в указанный диапазон". "<br>";
    }


    echo ("<h3> Задание №3 </h3>") . "<br>";

function plus($q, $r) {
    return $q + $r;
    }
echo plus($a,$b) . "<br>";

function minus($q, $r) {
    return $q - $r;
}
echo minus($a,$b) . "<br>";

function div($q, $r) {
    return $q / $r;
}
echo div($a,$b) . "<br>";

function mult($q, $r) {
    return $q * $r;
}
echo mult($a,$b) . "<br>";

echo ("<h3> Задание №4 </h3>") . "<br>";
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case plus:echo plus($arg1,$arg2) ;
        break;
        case minus : echo minus($arg1,$arg2);
        break;
        case div : echo div($arg1,$arg2);
        break;
        case mult : echo mult($arg1,$arg2);
        break;
        default :
        echo "Такой операции не существует";
    }
}
mathOperation(2,5,opr);

    ?>
