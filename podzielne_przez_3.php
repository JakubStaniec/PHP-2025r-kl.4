<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
$range = range(-9,9);

foreach ( $range as $cyfra)  

if ( $cyfra % 3 == 0 )
{echo "<span style= 'color: limegreen'>$cyfra</span>|";
}

else {
    echo "<span>$cyfra</span>|";
}
if ($cyfra === 9)
?>




</body>
</html>