<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aha</title>
    <style>
div {
background-color: beige;
color: red;
border-radius: 3%

}

</style>
</head>
<body>
<?php
$kosztnadzien = 85.00;
$data1 = date_create('2025-01-12');
$data2 = date_create('2025-02-20');
$liczbadni = (date_diff($data2, $data1)->format('%a'));
$koszt = ($liczbadni * $kosztnadzien)* 1.23;
?>
<div><br>
<p>Wynajem od: <b>12.01.2025</b> do <b>20.02.2025</b></p>
<p>Liczba dni najmu: <b><?=$liczbadni ?></b></p>
<p>Cena najmu: <b>85</b> zł (NETTO/DZIEŃ)</p>
<p>Całkowity koszt najmu: <b><?=$koszt?></b> zł (BRUTTO)(VAT 23%)</p><br>
</div>



</body>
</html>