<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$parzyste = range(0, 12, 2);
$dziesiatki = range(-10, 100, 10);
$polowki = range(-5.5, 5.5, 0.5);
$litery_od_em = range("m","u");
$litery_wstecz = range ("X", "E");
    ?>
<pre>
<p>
<?php print_r($parzyste)

?>
</p>

<?php
foreach($parzyste as $each_parzyste) {
    echo $each_parzyste . ' ';
}
?>

</pre>

<p>
<?php
foreach($dziesiatki as $each_dziesiatki) {
    echo $each_dziesiatki . ' ';
}
?>
</p>

<p>
<?php
foreach($polowki as $each_polowki) {
    echo $each_polowki . ' ';
}
?>
</p>

<p>
<?php
foreach($litery_od_emi as $each_litery_od_em) {
    echo $each_litery_od_em . ' ';
}
?>
</p>

<p>
<?php
foreach($litery_wsteczi as $each_litery_wstecz) {
    echo $each_litery_wstecz . ' ';
}
?>
</p>












</body>
</html>