<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zmienne stale</title>
    <style>
        span {
        border: dotted;
        color: orangered;
        text-shadow: 1px, 4px, 4px blueviolet;
        }
    </style>
</head>
<body>
    <?php $slowo = "slowo1" ; 
    $liczba = "102" ;
    $zmienna = "1,25" ; 
    $bool = true ?>
<hr>
Echo dla ciągu znaków:<span><?php echo $slowo ?> </span> <br>
echo dlaliczby całkowitej:<span><?php echo  $liczba ?> </span> <br>
echo dla liczby rzeczywistej:<span> <?php echo  $zmienna ?> </span> <br>
echo dlawartości bool-owskiej:<span> <?php echo  $bool ?> </span><br>
<hr>
<br>
var_dump dla ciągu znaków:<span><?php echo var_dump($slowo) ?></span><br>
var_dump dla liczby całkowitej:<span><?php echo var_dump($liczba) ?></span><br>
var_dump dla liczby rzeczywistej:<span><?php echo var_dump($zmienna) ?></span><br>
var_dump dla wartości bool-owskiej:<span><?php echo var_dump($bool) ?></span><br>
<hr>
<br>
<?php
define("ROK" , "1993");
define("FILM" , "StarWars"); ?>
<p> print dla pierwszej stałej: <span><?php print ROK ?></span></p>
<p> print dla drugiej stałej: <span><?php print FILM ?></span></p>
<php print ROK ?> <br>
<hr>
<p>var_export dla pierwszej stałej: <?php var_export(ROK) ?> </p> 
<p>var_export dla drugiej stałej: <?php var_export(FILM) ?> </p>
<hr>
</body>
</html>