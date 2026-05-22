<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: arial;
            table-layout: fixed;
            width: 100%
        }

        time {
            box-shadow: 0 0 5px red;
            font-family: courier;
            font-weight: bold;
        }

        strong {
            background-color: lightskyblue;
            border-radius: 5px;
            font-weight: bold;
            padding: 2px;
        }

        th,
        td {
            border: medium double black;
            padding: 10px;

        }
    </style>
    <?php
    $poniedzialeko = "12:00";
    $poniedzialekk = "23:59";
    $wtoreko = "8:05";
    $wtorekk = "10:15";
    $srodao = "6:45";
    $srodak = "11:25";
    $czwarteko = "9:55";
    $czwartekk = "10:35";
    $piateko = "13:50";
    $piatekk = "16:10";
    $sobotao = "20:05";
    $sobotak = "22:35";
    $niedzielao = "16:00";
    $niedzielak = "18:50";

    $poniedzialek2o = date_create("12:00");
    $poniedzialek2k = date_create("23:59");
    $wtorek2o = date_create("8:05");
    $wtorek2k = date_create("10:15");
    $sroda2o = date_create("6:45");
    $sroda2k = date_create("11:25");
    $czwartek2o = date_create("9:55");
    $czwartek2k = date_create("10:35");
    $piatek2o = date_create("13:50");
    $piatek2k = date_create("16:10");
    $sobota2o = date_create("20:05");
    $sobota2k = date_create("22:35");
    $niedziela2o = date_create("16:00");
    $niedziela2k = date_create("18:50");

    $pon_s = date_diff($poniedzialek2o, $poniedzialek2k)->h * 60 + 30;
    $wto_s = date_diff($wtorek2o, $wtorek2k)->h * 60 + 10;
    $sro_s = date_diff($sroda2o, $sroda2k)->h * 60 + 40;
    $czw_s = date_diff($czwartek2o, $czwartek2k)->h * 60 + 40;
    $pia_s = date_diff($piatek2o, $piatek2k)->h * 60 + 20;
    $sob_s = date_diff($sobota2o, $sobota2k)->h * 60 + 30;
    $nie_s = date_diff($niedziela2o, $niedziela2k)->h * 60 + 50;
    $SUMA = $pon_s + $wto_s + $sro_s + $czw_s + $pia_s + $sob_s + $nie_s;
    $srednia = ($pon_s + $wto_s + $sro_s + $czw_s + $pia_s + $sob_s + $nie_s) / 7;

    
    ?>

</head>

<body>
    <table>
        <tr>
            <th style="border: none;">
            <th><b>Poniedziałek</b></th>
            <th><b>Wtorek</b></th>
            <th><b>Sroda</b></th>
            <th><b>czwartek</b></th>
            <th><b>Piątek</b></td>
            <th><b>Sobota</b></th>
            <th><b>Niedziela</b></th>
        </tr>
        <tr>
            <td>Godziny przy komputerze</td>
            <td>Od <time><?= $poniedzialeko ?></time> do <time><?= $poniedzialekk ?></time></td>
            <td>Od <time><?= $wtoreko ?></time> do <time><?= $wtorekk ?></time></td>
            <td>Od <time><?= $srodao ?></time> do <time><?= $srodak ?></time></td>
            <td>Od <time><?= $czwarteko ?></time> do <time><?= $czwartekk ?></time></td>
            <td>Od <time><?= $piateko ?></time> do <time><?= $piatekk ?></time></td>
            <td>Od <time><?= $sobotao ?></time> do <time><?= $sobotak ?></time></td>
            <td>Od <time><?= $niedzielao ?></time> do <time><?= $niedzielak ?></time></td>


        </tr>
        <tr>
            <td>Różnica [h:m]</td>
            <td><time><?= date_diff($poniedzialek2o, $poniedzialek2k)->h ?>:<?= date_diff($poniedzialek2o, $poniedzialek2k)->i ?></time> (<strong><?= date_diff($poniedzialek2o, $poniedzialek2k)->h * 60 + 30 ?></strong> minut)</td>
            <td><time><?= date_diff($wtorek2o, $wtorek2k)->h ?>:<?= date_diff($wtorek2o, $wtorek2k)->i ?></time> (<strong><?= date_diff($wtorek2o, $wtorek2k)->h * 60 + 10 ?></strong> minut)</td>
            <td><time><?= date_diff($sroda2o, $sroda2k)->h ?>:<?= date_diff($sroda2o, $sroda2k)->i ?></time> (<strong><?= date_diff($sroda2o, $sroda2k)->h * 60 + 40 ?></strong> minut)</td>
            <td><time><?= date_diff($czwartek2o, $czwartek2k)->h ?>:<?= date_diff($czwartek2o, $czwartek2k)->i ?></time> (<strong><?= date_diff($czwartek2o, $czwartek2k)->h * 60 + 40 ?></strong> minut)</td>
            <td><time><?= date_diff($piatek2o, $piatek2k)->h ?>:<?= date_diff($piatek2o, $piatek2k)->i ?></time> (<strong><?= date_diff($piatek2o, $piatek2k)->h * 60 + 20 ?></strong> minut)</td>
            <td><time><?= date_diff($sobota2o, $sobota2k)->h ?>:<?= date_diff($sobota2o, $sobota2k)->i ?></time> (<strong><?= date_diff($sobota2o, $sobota2k)->h * 60 + 30 ?></strong> minut)</td>
            <td><time><?= date_diff($niedziela2o, $niedziela2k)->h ?>:<?= date_diff($niedziela2o, $niedziela2k)->i ?></time> (<strong><?= date_diff($niedziela2o, $niedziela2k)->h * 60 + 50 ?></strong> minut)</td>
        </tr>
        <tr>
            <td style="border: none;">
            <th colspan="7">Suma: <time><?= intdiv($SUMA, 60) ?>:<?= $SUMA % 60 ?></time> (<strong><?= $SUMA ?></strong> minut)</th>
        </tr>
        <tr>
            <td style="border: none;">
            <th colspan="7">Średnio dziennie: <time><?= intdiv($srednia, 60) ?>:<?= $SUMA % 60 ?></time> (<strong><?= intdiv($SUMA, 7) ?></strong> minut)</th>

        </tr>
        <tr>
            <td style="border: none;">

            <th colspan="7">Suma [dni : godziny : minuty : sekundy] 
            <time><?= date('d',intdiv($SUMA,1440)) ?> : <?= date('H',intdiv($SUMA,1440)) ?> : <?= $SUMA%60?> : <?= date('s', number_format($SUMA%60/3600 , 1)) ?>
        
        
            </time>
        </th>
        </tr>

    </table>



</body>

</html>