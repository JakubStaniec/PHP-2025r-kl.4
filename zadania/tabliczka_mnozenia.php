<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>zadanko</title>
    <link rel="stylesheet" href="inffloat.css">
</head>
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        font-family: Verdana;
        font-size: large;
        
    }

    th, td {
        border: 1px dashed black;
        padding: 5px;
        
    }

    th {
        background-color: burlywood;
    }

    td {
        background-color: beige;
        text-align: center;
    }

    .tak {
        background-color: bisque;
    }

    
</style>
</head>

<body>

    <table>
        <caption>Tabliczka mnożenia</caption>

        <?php
        for ($col = 0; $col <= 10; $col++) {
            echo "<tr>";

            for ($poz = 0; $poz <= 10; $poz++) {


                if ($col == 0 && $poz == 0) {
                    echo "<th>X</th>";
                } else if ($col == 0) {
                    echo "<th>$poz</th>";
                } elseif ($poz == 0) {
                    echo "<th>$col</th>";
                } else {
                    $wynik = $col * $poz;



                    if ($col == $poz) {
                        echo "<td class='tak'>$wynik</td>";
                    } else {
                        echo "<td>$wynik</td>";
                    }
                }
            }

           
        }
        ?>




    </table>

</body>

</html>