<?php
$h1 = "<h1> Current year </h1>";
$title = "First php";
$current_year = (date('Y'));

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
</body>
</html>