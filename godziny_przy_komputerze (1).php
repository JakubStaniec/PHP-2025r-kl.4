<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godziny przy komputerze</title>

    <style>
        table {
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
            table-layout: fixed;
            width: 100%;
        }

        th,td {
            border: medium double black;
            padding: 10px;
        }

        time {
            box-shadow: 0 0 5px red;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }

        strong {
            background-color: lightskyblue;
            border-radius: 5px;
            font-weight: bold;
            padding: 2px;
        }
        #brak{
            border: none;
        }
    </style>

    <?php
    $po1 = "12:00";
    $po2 = "15:30";
    $wt1 = "08:05";
    $wt2 = "10:15";
    $sr1 = "06:45";
    $sr2 = "11:25";
    $cz1 = "09:55";
    $cz2 = "10:35";
    $pi1 = "13:50";
    $pi2 = "16:10";
    $so1 = "20:05";
    $so2 = "22:35";
    $ni1 = "16:00";
    $ni2 = "18:50";

    $pon1 = date_create('12:00');
    $pon2 = date_create('15:30');
    $wto1 = date_create('08:05');
    $wto2 = date_create('10:15');
    $sro1 = date_create('06:45');
    $sro2 = date_create('11:25');
    $czw1 = date_create('09:55');
    $czw2 = date_create('10:35');
    $pia1 = date_create('13:50');
    $pia2 = date_create('16:10');
    $sob1 = date_create('20:05');
    $sob2 = date_create('22:35');
    $nie1 = date_create('16:00');
    $nie2 = date_create('18:50'); 

    $pon_s=date_diff($pon1, $pon2)->h * 60 + 30;
    $wto_s=date_diff($wto1, $wto2)->h * 60 + 10;
    $sro_s=date_diff($sro1, $sro2)->h * 60 + 40;
    $czw_s=date_diff($czw1, $czw2)->h * 60 + 40;
    $pia_s=date_diff($pia1, $pia2)->h * 60 + 20;
    $sob_s=date_diff($sob1, $sob2)->h * 60 + 30;
    $nie_s=date_diff($nie1, $nie2)->h * 60 + 50;
    $SUMA = $pon_s+$wto_s+$sro_s+$czw_s+$pia_s+$sob_s+$nie_s;?>
</head>

<body>
    <table>
        <tr>
            <th id="brak"></th>
            <th>Poniedziałek</th>
            <th>Wtorek</th>
            <th>Środa</th>
            <th>Czwartek</th>
            <th>Piątek</th>
            <th>Sobota</th>
            <th>Niedziela</th>
        </tr>
        <tr>
            <td>Godziny przy komputerze</td>
            <td>od <time><?= $po1 ?></time> do <time><?= $po2 ?></time></td>
            <td>od <time><?= $wt1 ?></time> do <time><?= $wt2 ?></time></td>
            <td>od <time><?= $sr1 ?></time> do <time><?= $sr2 ?></time></td>
            <td>od <time><?= $cz1 ?></time> do <time><?= $cz2 ?></time></td>
            <td>od <time><?= $pi1 ?></time> do <time><?= $pi2 ?></time></td>
            <td>od <time><?= $so1 ?></time> do <time><?= $so2 ?></time></td>
            <td>od <time><?= $ni1 ?></time> do <time><?= $ni2 ?></time></td>
        </tr>
        <tr>
            <td>Różnca [h:m]</td>
            <td><time><?= date_diff($pon1, $pon2)->h ?>:<?= date_diff($pon1, $pon2)->i ?></time> (<strong><?= date_diff($pon1, $pon2)->h * 60 + 30 ?></strong> minut)</td>
            <td><time><?= date_diff($wto1, $wto2)->h ?>:<?= date_diff($wto1, $wto2)->i ?></time> (<strong><?= date_diff($wto1, $wto2)->h * 60 + 10 ?></strong> minut)</td>
            <td><time><?= date_diff($sro1, $sro2)->h ?>:<?= date_diff($sro1, $sro2)->i ?></time> (<strong><?= date_diff($sro1, $sro2)->h * 60 + 40 ?></strong> minut)</td>
            <td><time><?= date_diff($czw1, $czw2)->h ?>:<?= date_diff($czw1, $czw2)->i ?></time> (<strong><?= date_diff($czw1, $czw2)->h * 60 + 40 ?></strong> minut)</td>
            <td><time><?= date_diff($pia1, $pia2)->h ?>:<?= date_diff($pia1, $pia2)->i ?></time> (<strong><?= date_diff($pia1, $pia2)->h * 60 + 20 ?></strong> minut)</td>
            <td><time><?= date_diff($sob1, $sob2)->h ?>:<?= date_diff($sob1, $sob2)->i ?></time> (<strong><?= date_diff($sob1, $sob2)->h * 60 + 30 ?></strong> minut)</td>
            <td><time><?= date_diff($nie1, $nie2)->h ?>:<?= date_diff($nie1, $nie2)->i ?></time> (<strong><?= date_diff($nie1, $nie2)->h * 60 + 50 ?></strong> minut)</td>
        </tr>
        <tr>
            <td id="brak"></td>
            <th colspan="7">Suma: <time><?=intdiv($SUMA,60)?>:<?=$SUMA%60?></time> (<strong><?=$SUMA?></strong> minut)</th>
        </tr>
    </table>
</body>

</html>