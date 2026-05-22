<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
</head>
<body>

   <?php
    $plusy = rand(0,10);
    $blockquote = "+";

    $tekst = "<blockquote>$ plusy = $plusy</blockquote>"
    ?>

    <?= $tekst ?>


    <?php
    if ($plusy == 0)
        echo "Wartość jest poza zakresem <1,9>";
    else
        if ($plusy == 10)
            echo "Wartość jest poza zakresem <1,9>";
        else
            for ($i = 1;$i <= $plusy ; $i++)
                echo $blockquote;
    ?>


</body>
</html>