<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid rosybrown;
            padding: 10px;
        }

        td.piatek {
            background-color: sandybrown;
        }
    </style>
</head>

<body>
    <?php
    $dni = array(
        "poniedziałek",
        "wtorek",
        "środa",
        "czwartek",
        "piątek",
        "sobota",
        "niedziela"
    );
    ?>
    <table><?php
            foreach ($dni as $dzien) {
                if ($dzien == "piątek") {

                    echo "<tr><td class='piatek'>$dzien</td></tr>";
                } else {
                    echo "<tr><td>$dzien</td></tr>";
                }
            }

            ?>
    </table>




</body>

</html>