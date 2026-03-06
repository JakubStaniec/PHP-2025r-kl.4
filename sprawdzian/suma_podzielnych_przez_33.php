<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 2</title>
</head>

<body>
    <h3>Liczby dwucyfrowe podzielne przez 33 to:</h3>
    <?php
    
$range = range(-33,33,);

foreach ( $range as $cyfra)  

if ( $cyfra % 33 == 0 )
{echo "<span>$cyfra</span>,";
}

else {
    echo "<span>$cyfra</span>";
}
if ($cyfra === 33)
?>














</body>
</html>