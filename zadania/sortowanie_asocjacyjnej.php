<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$filmy = 
[
    "Skazani na Shawshank" => "dramat",
    "Nietykalni" => "biograficzny",
    "Władca Pierścieni: Powrót króla" =>"fantasy",
    "Pulp Fiction" => "gangsterski",
    "Siedem" => "kryminał",
    "Podziemny krąg" => "thriller",
    "Django" => "western",
    "Król Lew" => "animacja",
    "Avengers: Wojna bez granic" => "akcja",
    "Dobry, zły i brzydki" => "western"

];
   ?>
<table>
<tr>
    <th>Klucz</th>
    <th>Wartość</th>
</tr>
<?php
arsort($filmy);
foreach($filmy as $tytuł => $gatunek)
{
    echo"<tr><td>$tytuł</td><td>$gatunek</td></tr>";
}
?>

</table>






</body>
</html>