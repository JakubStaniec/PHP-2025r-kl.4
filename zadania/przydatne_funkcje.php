<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>a</title>
</head>
<body>

<form method="post" action="">
    <label>Usuń "białe" znaki</label>
    <input type="text" name="trim"><br>

    <label>Usuń ukośniki (backslash)</label>
    <input type="text" name="stripslashes"><br>

    <label>Zmień znaki HTML na encje</label>
    <input type="text" name="htmlspecialchars"><br>

    <input type="submit" value="wyślij">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $t1 = $_POST["trim"];
    $t2 = $_POST["stripslashes"];
    $t3 = $_POST["htmlspecialchars"];

    
    var_dump($t1);
    echo "<br>";
    var_dump($t2);
    echo "<br>";
    var_dump($t3);
    echo "<br>";
    

    echo "Tekst z pola puste_znaki bez funkcji trim:";
    var_dump(trim($t1));
    echo "<br>";

    echo "Stripslashes: ";
    var_dump(stripslashes($t2));
    echo "<br>";

    echo "HTMLspecialchars: ";
    var_dump(htmlspecialchars($t3));
    echo "<br>";
}
?>

</body>
</html>