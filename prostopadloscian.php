<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
$b = 12;
$c = 84;
?>

<p>Przekątna prostopadłościanu o krawędziach długości <?=$a?>, <?=$b?> i <?=$c?> jest równa
<?= sqrt(($a ** 2)+($b ** 2)+($c ** 2))?></p>
<p>Pole powierzchni prostopadłościanu o krawędziach długości <?=$a?>, <?=$b?> i <?=$c?> wynosi 
<?= 2 * (($a * $b)+($a * $c)+($b * $c))?> j<sup>2</sup></p>



</body>
</html>