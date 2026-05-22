<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWN i Helion</title>

    <style>
        table{
            border-collapse: collapse;
        }

        th, td{
            border: 1px solid black;
            padding: 8px;
        }

        .cena{
            text-align: right;
        }
    </style>
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
    die('Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ' . mysqli_connect_error());
}

$sql = "
SELECT 
    Sygnatura,
    Tytul,
    CONCAT(Imie, ' ', Nazwisko) AS Autor,
    Wydawnictwo,
    Rok_wyd,
    Cena
FROM ksiazki
WHERE 
    (Wydawnictwo = 'PWN' OR Wydawnictwo = 'Helion')
    AND Rok_wyd > 1990
    AND Rok_wyd < 2011
ORDER BY Rok_wyd ASC
";

$result = mysqli_query($conn, $sql);

echo "<table>";

echo "<tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Cena</th>
      </tr>";

while($row = mysqli_fetch_assoc($result))
{
    $zl = floor($row['Cena']);
    $gr = ($row['Cena'] - $zl) * 100;

    echo "<tr>";

    echo "<td>".$row['Sygnatura']."</td>";
    echo "<td>".$row['Tytul']."</td>";
    echo "<td>".$row['Autor']."</td>";
    echo "<td>".$row['Wydawnictwo']."</td>";
    echo "<td>".$row['Rok_wyd']."</td>";

    echo "<td class='cena'>"
        .$zl." zł "
        .sprintf("%02d", $gr)." gr
        </td>";

    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);

?>

</body>
</html>