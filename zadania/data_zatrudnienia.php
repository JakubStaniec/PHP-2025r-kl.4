<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conn = mysqli_connect("localhost", "root", "", "staniec");

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error());
}

$sql = "SELECT Imie, Nazwisko, data_zatrudnienia FROM pracownicy";
$zapytanie= mysqli_query($conn, $sql);
print "<table>
<tr>
<th>Imię</th>
<th>Nazwisko</th>
<th>Data zatrudnienia</th>
</tr>
";
while($wynik = mysqli_fetch_row($zapytanie)){
$d = strtotime($wynik[2]);
$dy = date('j F Y', $d);
print $dy
print
"<tr><td>".$wynik[0].
"</td><td>".$wynik[1].


}




?>
</body>
</html>