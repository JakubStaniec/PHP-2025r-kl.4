<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Działania matematyczne</title>
</head>

<body>

    <?php
    $x = 5;
    $y = 15;

    $a = 4;
    $b = 35;

    $r = 16;
    $alfa = 93;
    $pi = pi();

    $R = 3;
    $l = 5;



    // AD1
    $dodawanie = $x + $y;
    $odejmowanie = $x - $y;
    $mnozenie = $x * $y;
    $dzielenie = $x / $y;
    $reszta = $x % $y;



    // AD2
    $obwod = 2 * ($a + $b);
    $pole = $a * $b;


    // AD3
    $obwodKola = 2 * $pi * $r;
    $poleKola = $pi * pow($r, 2);
    $poleWycinka = ($pi * pow($r, 2) * $alfa) / 360;



    // AD4
    $poleCalkowite = pi() * $R * ($R + $l);
    $objetosc = (1 / 3) * pi() * pow($R, 2) * $l;
    ?>





    <fieldset>
        <legend>
            <p><strong>AD 1:</strong></p>
        </legend>

        <p>Wynik dodawania <?= $x ?> i <?= $y ?> wynosi <?= $dodawanie ?></p>
        <p>Wynik odejmowania <?= $x ?> i <?= $y ?> wynosi <?= $odejmowanie ?></p>
        <p>Wynik mnożenia <?= $x ?> i <?= $y ?> wynosi <?= $mnozenie ?></p>
        <p>Wynik dzielenia <?= $x ?> przez <?= $y ?> wynosi <?= $dzielenie ?></p>
        <p>Reszta z dzielenia <?= $x ?> przez <?= $y ?> wynosi <?= $reszta ?></p>
    </fieldset>

    <fieldset>
        <legend>
            <p><strong>AD 2:</strong></p>
        </legend>

        <p>Obwód prostokąta o bokach długości <?= $a ?> i <?= $b ?> jest równy <?= $obwod ?></p>
        <p>Pole prostokąta o bokach długości <?= $a ?> i <?= $b ?> jest równe <?= $pole ?> j<sup>2</sup></p>
    </fieldset>

    <fieldset>
        <legend>
            <p><strong>AD 3:</strong></p>
        </legend>

        <p>Obwód koła o promieniu <?= $r ?> jest równy <?= round($obwodKola, 4) ?></p>
        <p>Pole koła o promieniu <?= $r ?> jest równe <?= round($poleKola, 4) ?> j<sup>2</sup></p>
        <p>Pole wycinka koła o promieniu <?= $r ?> i kącie środkowym <?= $alfa ?>&deg; jest równe <?= round($poleWycinka, 4) ?> j<sup>2</sup></p>
    </fieldset>

    <fieldset>
        <legend>
            <p><strong>AD 4:</strong></p>
        </legend>

        <p>Pole powierzchni stożka o promieniu podstawy <?= $R ?> i tworzącej <?= $l ?> wynosi <?= round($poleCalkowite, 4) ?> j<sup>2</sup></p>
        <p>Objętość stożka o promieniu podstawy <?= $R ?> i wysokości <?= $l ?> jest równa <?= round($objetosc, 4) ?> j<sup>3</sup></p>
    </fieldset>
</body>

</html>