<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$dni_tygodnia = [
    1 => "poniedziałek",
    2 => "wtorek",
    3 => "środa",
    4 => "czwartek",
    5 => "piątek",
    6 => "sobota",
    7 => "niedziela"
];




$miesiace = [
    1 => "stycznia",
    2 => "lutego",
    3 => "marca",
    4 => "kwietnia",
    5 => "maja",
    6 => "czerwca",
    7 => "lipca",
    8 => "sierpnia",
    9 => "września",
    10 => "października",
    11 => "listopada",
    12 => "grudnia"
];


$dzien1 = 4; 
$dzien_miesiac1 = 21;
$miesiac1 = 12;
$rok1 = 1995;

echo "Urodziłem się we {$dni_tygodnia[$dzien1]}, {$dzien_miesiac1} {$miesiace[$miesiac1]} {$rok1} roku.<br>";




$dzien2 = 7;
$dzien_miesiac2 = 3;
$miesiac2 = 5;
$rok2 = 2037;

echo "Swój pierwszy milion dolarów zarobię w {$dni_tygodnia[$dzien2]}, {$dzien_miesiac2} {$miesiace[$miesiac2]} {$rok2} roku.";

?>


</body>
</html>