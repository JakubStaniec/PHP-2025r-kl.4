<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        font-family: sans-serif;
        font-size: 12px;
    }

td{
    
}

    </style>
</head>
<body>
    <table> 
        <?php for ($i = 0; $i = 20; $i++){}
 echo "<tr>";
for ($j = 0; $j <= 20; $j++ ) {
$is_highlight = (
$i + $j == 10 ||
$i + $j == 30 ||
$i - $j == 10 ||
$i - $j == -10 
);
$class = $is_highlight ? 'class="highlight"':";
echo "<td $class>$i|$j</td>";
}
echo "</tr>";
}

?>
</table>
</body>
</html>