<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    th{
        border: 4px double magenta;
        padding: 15px;
    }
</style>
</head>
<body>
    <?php 
    $tak = "¡Hola Mundo!";
    $array = mb_str_split($tak);
    $dlugosc = strlen($tak);
    ?>
<table>
<tr>
<?php foreach ($array as $tak){
    echo"<th>$tak</th>";
}
?>


</tr>
</table>








¯\_(ツ)_/¯



</body>
</html>