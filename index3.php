<?php
$h1 = "<h1> Current date </h1>";
$title = "First php";
$current_year = date('d.m.Y');
$footer = <<<php
<footer>
 $current_year
</footer>
php;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?  print $title ?></title>
</head>
<body>
    <?php 
        print ($h1);
        echo ' <br/>';
        print ("<h3> $current_year </h3>");
    ?>
<p>В самом PHP содержится достаточно большое количество встроенных функций и языковых конструкци,например, функции обработки строк и функции для работы с переменными</p>
    <? echo $footer?>
    
</body>
</html>