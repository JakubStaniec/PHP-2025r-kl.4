<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad</title>
    <style>
        td {
            border-style: dashed;
            border-color: black;
            border-width: 10px;
            color: purple;
            font-size: 80px;
            font-weight: bold;
            padding: 100px;
            text-shadow: 5px 5px 5px green;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $liczba = 77; ?>
    <table>
        <tr>
            <td><?= $liczba; ?></td>
            <td><?= $liczba * 2; ?></td>
            <td><?= $liczba * 3; ?></td>
            <td><?= $liczba * 4; ?></td>

        </tr>


</body>

</html>