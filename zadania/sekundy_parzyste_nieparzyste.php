<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekundy</title>
    
</head>
<body>
    
<?php
$time = date("H:i:s");
$seconds = (int) date("s");
if ($seconds % 2 == 0) {
    $color = "red";
} else {
    $color = "blue";
}
?>

    <style>
        p {
            font-size: 220px;
            font-weight: bold;
            text-align: center;
            border: 20px solid <?php echo $color; ?>;
            color: <?php echo $color; ?>;
            margin: 50px;
        }
    </style>
<body>

<p><?php echo $time; ?></p>

</body>


















</body>
</html>