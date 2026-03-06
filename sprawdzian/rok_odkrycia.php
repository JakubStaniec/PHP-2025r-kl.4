<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 1</title>
</head>
<style>
table{
border-collapse: collapse;
 border: 2px dotted;
 margin: 10px;
text-align: center;
border-color: deeppink;
}




</style>
<body>
    <?php 
    $daty = array_fill(8, 5, 'pierwiastki');
    $daty = [
"1774" => "chlor",
"1894" => "argon",
"1807" => "potas",
"1808" => "wapń",
"1879" => "skand",
    ];

    ?> 
<table>
<tr>
    <th>Pierwiastek</th>
    <th>Rok odkrycia</th>
</tr>
 <pre>
<?php print_r($daty);
?>

</pre>

<?php
arsort($daty);
foreach($daty as $data => $pierwiastki)
{
    echo"<tr><td>$data</td><td>$pierwiastki</td></tr>";
}
?>

</table>




</body>
</html>
  
