<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 5</title>
</head>
<body>
    <?php
    $title = "Pierwsza strona z PHP—em";
    $link1 = "https://github.com/";
    $link2 = "https://www.youtube.com/?app=desktop&gl=PL&hl=pl";
    $link3 = "https://www.zsi.kielce.pl/";
?>
<h1></h1>
<h1> <?=$title; ?> </h1>
<ol>
    <li><a href=<?= $link1;?>> Github </a></li>
    <li><a href=<?= $link2;?>> Youtube </a></li>
    <li><a href=<?= $link3;?>> Szkola ZSI </a></li>
</ol>


</body>
</html>