<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zadanko</title>
    <link rel="stylesheet" href="inffloat.css">
</head>
<body>




<h2>AD 2.</h2>



<?php
$liczba1 = 0;
$liczba2 = -300;
$liczba3 = 1.2;
$liczba4 = -1.0E-5;

?>

<div class="blok">
    <p>Zmienna <b>$liczba1</b> ma wartość <?= $liczba1 ?>, a funkcja <b>is_int()</b> zwraca dla niej wynik: <?php var_dump(is_int($liczba1)); ?></p>
    <p>Zmienna <b>$liczba2</b> ma wartość <?= $liczba2 ?>, a funkcja <b>is_int()</b> zwraca dla niej wynik: <?php var_dump(is_int($liczba2)); ?></p>
    <p>Zmienna <b>$liczba3</b> ma wartość <?= $liczba3 ?>, a funkcja <b>is_int()</b> zwraca dla niej wynik: <?php var_dump(is_int($liczba3)); ?></p>
    <p>Zmienna <b>$liczba4</b> ma wartość <?= $liczba4 ?>, a funkcja <b>is_int()</b> zwraca dla niej wynik: <?php var_dump(is_int($liczba4)); ?></p>

</div>






<div class="blok">

    <p>Zmienna <b>$liczba1</b> ma wartość <?= $liczba1 ?>, a funkcja <b>is_float()</b> zwraca dla niej wynik: <?php var_dump(is_float($liczba1)); ?></p>
    <p>Zmienna <b>$liczba2</b> ma wartość <?= $liczba2 ?>, a funkcja <b>is_float()</b> zwraca dla niej wynik: <?php var_dump(is_float($liczba2)); ?></p>
    <p>Zmienna <b>$liczba3</b> ma wartość <?= $liczba3 ?>, a funkcja <b>is_float()</b> zwraca dla niej wynik: <?php var_dump(is_float($liczba3)); ?></p>
    <p>Zmienna <b>$liczba4</b> ma wartość <?= $liczba4 ?>, a funkcja <b>is_float()</b> zwraca dla niej wynik: <?php var_dump(is_float($liczba4)); ?></p>

</div>



<h2>AD 3.</h2>


<?php
$dodaj = "59.85" + 100;
?>

<p>Zmienna <b>$dodaj</b> ma wartość <?= $dodaj ?>, a funkcja <b>is_numeric()</b> zwraca dla niej wynik: <?php var_dump(is_numeric($dodaj)); ?></p>



<h2>AD 4.</h2>
<ul>


    <li>Stała <b>PHP_INT_MAX</b> ma wartość <?= PHP_INT_MAX ?></li>
    <li>Stała <b>PHP_INT_MIN</b> ma wartość <?= PHP_INT_MIN ?></li>
    <li>Stała <b>PHP_INT_SIZE</b> ma wartość <?= PHP_INT_SIZE ?></li>
    <li>Stała <b>PHP_FLOAT_MAX</b> ma wartość <?= PHP_FLOAT_MAX ?></li>
    <li>Stała <b>PHP_FLOAT_MIN</b> ma wartość <?= PHP_FLOAT_MIN ?></li>
    <li>Stała <b>PHP_FLOAT_DIG</b> ma wartość <?= PHP_FLOAT_DIG ?></li>
    <li>Stała <b>PHP_FLOAT_EPSILON</b> ma wartość <?= PHP_FLOAT_EPSILON ?></li>


</ul>




</body>
</html>