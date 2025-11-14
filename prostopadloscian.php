<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

   .jeden{
color:violet;
font-size: 150%;
font-weight: 600;
   }
.tak{

    display: inline-block;
    transform: rotate(270deg;)
}
.nie{
display: inline-block;
transform: rotate(270deg;)
}

.tak1{

display: inline-block;
transform: rotate(270deg;)
}

    </style>
</head>

<body>
    <?php
$a = 5;
$b = 12;
$c = 84;
?>

<p class="jeden";><span class="tak">☝️</span>Przekątna prostopadłościanu o krawędziach długości <?=$a?>, <?=$b?> i <?=$c?> jest równa <?= sqrt(($a ** 2)+($b ** 2)+($c ** 2))?><span class="nie">☝️</span></p>

<p style=" text-decoration: overline; color:purple; font-size: 25px; font-weight: 600;";><span class="tak">✍️</span><b>Pole powierzchni prostopadłościanu o krawędziach długości <?=$a?>, <?=$b?> i <?=$c?> wynosi <?= 2 * (($a * $b)+($a * $c)+($b * $c))?> j<sup>2</sup>.<span class="tak">✍️</span></p><b>



</body>
</html>