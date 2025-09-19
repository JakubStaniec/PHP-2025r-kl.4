<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zmienne stale</title>
</head>
<body>
    <?php $slowo = "slowo1" ; 
    $liczba = "102" ;
    $zmienna = "1,25" ; 
    $bool = true ?>
<hr>
<?php echo 'Echo dla ciągu znaków: ' , $slowo ?> <br>
<?php echo 'echo dlaliczby całkowitej: ' , $liczba ?> <br>
<?php echo 'echo dla liczby rzeczywistej: ' , $zmienna ?> <br>
<?php echo 'echo dlawartości bool-owskiej: ' , $bool ?> <br>
<hr>
<br>
<?php echo 'var_dump dla ciągu znaków: '; var_dump($slowo) ?><br>
<?php echo 'var_dump dla liczby całkowitej: '; var_dump($liczba) ?><br>
<?php echo 'var_dump dla liczby rzeczywistej: '; var_dump($zmienna) ?><br>
<?php echo 'var_dump dla wartości bool-owskiej: '; var_dump($bool) ?><br>
<hr>
<br>
<php
define("ROK",  "1993");
define("gra" , "WarThunder"); ?>
<?php echo 'print dla pierwszej stałej'?>
<php print ROK ?> <br>
<hr>




</body>
</html>