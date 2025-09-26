<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
</head>

<body>

    <?php
    $string = "Nie ma nic trudniejszego na świecie niż szczerość i nie ma nic łatwiejszego niż pochlebstwo.";
    echo "<p>$string</p>";
    $tekstZmieniony = ucwords($string);

    echo "<blockquote>$tekstZmieniony</blockquote>";
    ?>



</body>

</html>