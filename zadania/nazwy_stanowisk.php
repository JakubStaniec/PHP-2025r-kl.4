<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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


$zapytanie = mysqli_query{} 
}

mysqli_close($conn);
?>

</body>
</html>
