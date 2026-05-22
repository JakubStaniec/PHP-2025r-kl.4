<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul style="list-style: lower-latin;";>
  <?php


echo "<li>HTTP_USER_AGENT = " . $_SERVER["HTTP_USER_AGENT"] . "</li>";
echo "<li>PATH = " . $_SERVER["PATH"] . "</li>";
echo "<li>REQUEST_METHOD = " . $_SERVER["REQUEST_METHOD"] . "</li>";
echo "<li>REQUEST_TIME = " . $_SERVER["REQUEST_TIME"] . "</li>";
echo "<li>SERVER_NAME = " . $_SERVER["SERVER_NAME"] . "</li>";
echo "<li>SERVER_PROTOCOL = " . $_SERVER["SERVER_PROTOCOL"] . "</li>";
echo "<li>SERVER_SOFTWARE = " . $_SERVER["SERVER_SOFTWARE"] . "</li>";


?>










</body>
</html>