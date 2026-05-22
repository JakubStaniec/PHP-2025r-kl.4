<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p{
color: darkred;
font-size: 22px;
border: double 4px darkred;

}
</style>

</head>
<body>
<?php    
$prom = 1;
$obj = ( 4/3 ) * pi() * ( $prom ** 3 );
?>
<p>Objętość kuli o promieniu <?=$prom?> jest równa <?= round($obj, 4)?> cm<sup>3</sup></p>






















</body>
</html>