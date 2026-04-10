<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: solid 1px lightgray;
        }

        table {
            border: solid 1px lightgray;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <caption>Terminy</caption>
        <?php
        for ($i = 1; $i < 51; $i++) {
            echo "<tr><td>Termin $i </td><td> <form method='post'>
            <input type='date' id='trim' name='date$i'></td></tr>";
           
        }
        ?>
 <td colspan="2" style="text-align: center;"><input type="submit" value="zatwierdź"></td>
    </table>


</body>

</html>