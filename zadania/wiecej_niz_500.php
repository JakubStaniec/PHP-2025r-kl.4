<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Książki powyżej 500 stron</title>
    <style>
        table {
            border-collapse: collapse;
            
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            background-color: ivory;
        }

        th {
            background-color: orange;
        }
    </style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "staniec");

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

$sql = "
SELECT 
    k.Sygnatura,
    k.Tytul,
    CONCAT(k.Imie, ' ', k.Nazwisko) AS Autor,
    d.Nazwa AS Dzial,
    k.Wydawnictwo,
    k.Rok_wyd,
    k.Objetosc_ks,
    k.Cena
FROM ksiazki k
JOIN dzialy d ON k.Id_dzial = d.Id_dzial
WHERE k.Objetosc_ks > 500
ORDER BY k.Objetosc_ks ASC
";

$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Autor</th>
        <th>Dział</th>
        <th>Wydawnictwo</th>
        <th>Rok wydania</th>
        <th>Liczba stron</th>
        <th>Cena</th>
      </tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['Sygnatura']."</td>";
    echo "<td>".$row['Tytul']."</td>";
    echo "<td>".$row['Autor']."</td>";
    echo "<td>".$row['Dzial']."</td>";
    echo "<td>".$row['Wydawnictwo']."</td>";
    echo "<td>".$row['Rok_wyd']."</td>";
    echo "<td>".$row['Objetosc_ks']."</td>";
    echo "<td>".$row['Cena']."</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>