<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sekundy</title>
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

<body>

<p><?php echo $time; ?></p>

</body>


















</body>
</html>