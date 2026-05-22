<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wow</title>
    <style>
h2{
text-align: center;
color: darkorchid;

}
h4{
    text-align: center;
    color: magenta;
}


    </style>
</head>
<body>

    <?php
    $losowa = rand(1, 30);

?>
<h2><?=$losowa  ?> </h2>


<h4><?php
if ($losowa >=20) echo"Wylosowana liczba jest większa lub równa 20"?></h4> 

<h4 style="text-align: center; color: navy;"><?php if ($losowa % 2 == 0) {echo"Wylosowana liczba jest parzysta";}    
else {echo"Wylosowana liczba jest nieparzysta";}?></h4>

<h4 style="text-align: center; color: deeppink;"> 
<?php
if ($losowa <=10)
{echo "pierwsza dziesiątka";}
elseif ($losowa <= 20)
{echo "druga dziesiątka";}
else {echo "trzecia dziesiątka";}

?></h4>




</body>
</html>