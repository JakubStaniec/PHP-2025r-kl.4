<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$servername = 'localhost';
$username = 'staniec';
$password = 'pieszczoch';
$database = 'staniec';

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    echo 'Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ' . mysqli_connect_error();
}
else
{
    echo 'Połączono, hej jestem tutaj!';
}

mysqli_close($conn);
?>

</body>
</html>