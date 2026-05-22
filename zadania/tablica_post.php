<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
<input type="email" placeholder="Email" name="email"><br><br>


<input type="date" name="data"><br><br>

<input type="month" name="miesiac"><br><br>


<input type="time" name="czas"><br><br>


<input type="week" name="tydzien"><br><br>

<input type="submit" value="Wyślij">
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Zawartość tablicy \$_POST:</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>




</body>
</html>