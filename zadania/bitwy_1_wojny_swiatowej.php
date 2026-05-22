<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$data = time();
$datannenberg = strtotime("26 August 1914");
$obl = $data - $datannenberg;
$dzien = 60 * 60 * 24;
$dniottnenberg = $obl / $dzien;
$data1 = date('d,m,Y' , strtotime("26 august 1914"));
?>
<p style="Color: purple;">Bitwa pod Tannenbergiem rozpoczęła się <u><?= $data1 ?></u> roku i było to <?= round($dniottnenberg, 2)?> dni temu.</p>


<?php
$DateTimeDzis = date_create();
$datetimekiedys = date_create('1914-08-25');
$metodadwa = date_diff($datetimekiedys, $DateTimeDzis);
$dwaa = $metodadwa->format('%a');
$data1 = date('d,m,Y' , strtotime("26 august 1914"));
?>
<p style="Color: purple;">Bitwa pod Tannenbergiem rozpoczęła się <u><?= $data1 ?></u> roku i było to <?= $dwaa?> dni temu.</p>

<hr>

<?php
$data = time();
$datannenbergg = strtotime('1914-09-05');
$obli = $data - $datannenbergg;
$dzien = 60 * 60 * 24;
$dniottnenbergg = $obli / $dzien;
$data2 = date('d,m,Y' , strtotime("05 september 1914"));
?>
<p style="Color: brown;">Pierwsza bitwa pod Marną rozpoczęła się <u><?= $data2 ?></u> roku i było to <?= round($dniottnenbergg, 2)?> dni temu.</p>


<?php
$DateTimeDzis2 = date_create();
$datetimekiedys2 = date_create('1914-09-05');
$metodadwa2 = date_diff($datetimekiedys2, $DateTimeDzis2);
$dwaa2 = $metodadwa2->format('%a');
?>
<p style="Color: brown">Pierwsza bitwa pod Marną rozpoczęła się <u><?= $data2 ?></u> roku i było to <?= $dwaa2?> dni temu.</p>


<hr>





<?php
$data = time();
$datannenbergg2 = strtotime('1916-02-21');
$oblic = $data - $datannenbergg2;
$dzien = 60 * 60 * 24;
$dniottnenbergg2 = $oblic / $dzien;
$data3 = date('d,m,Y' , strtotime("21 february 1916"));
?>
<p style="Color: darkcyan;">Pierwsza bitwa pod Verdun rozpoczęła się <u><?= $data3 ?></u> roku i było to <?= round($dniottnenbergg2, 2)?> dni temu.</p>


<?php
$DateTimeDzis22 = date_create();
$datetimekiedys22 = date_create('1916-02-21');
$metodadwa22 = date_diff($datetimekiedys22, $DateTimeDzis22);
$dwaa22 = $metodadwa22->format('%a');
?>
<p style="Color: darkcyan">Pierwsza bitwa pod Verdun rozpoczęła się <u><?= $data3 ?></u> roku i było to <?= $dwaa22?> dni temu.</p>












</body>
</html>