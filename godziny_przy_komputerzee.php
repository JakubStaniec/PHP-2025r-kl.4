<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial;
            table-layout: fixed;
        }

        th,
        td {
            border: medium double black;
            padding: 10px;
        }

        time {
            box-shadow: 0 0 5px red;
            font-family: 'Courier';
            font-weight: bold;
        }

        strong {
            border-radius: 5px;
            font-weight: bold;
            padding: 2px;
            background-color: lightskyblue;
        }
    </style>
    <?php $poniedziałek_p =  "12:00";
    $poniedziałek_k = "23:59";
    $wtorek_p = "08.05";
    $wtorek_k = "10:15";
    $sroda_p = "06:45";
    $sroda_k = "11:25";
    $czwartek_p = "09:55";
    $czwartek_k = "10:35";
    $piatek_p = "13:50";
    $piatek_k = "16:10";
    $sobota_p = "20:05";
    $sobota_k = "22:35";
    $niedziela_p = "16:00";
    $niedziela_k = "18:50";
    $poniedziałek2_p = date_create("12:00");
    $poniedziałek2_k = date_create("23:59");
    $wtorek2_p = date_create("08.05");
    $wtorek2_k = date_create("10:15");
    $sroda2_p = date_create("06.45");
    $sroda2_k = date_create("11:25");
    $czwartek2_p = date_create("09:55");
    $czwartek2_k = date_create("10:35");
    $piatek2_p = date_create("13:50");
    $piatek2_k = date_create("16:10");
    $sobota2_p = date_create("20:05");
    $sobota2_k = date_create("22:35");
    $niedziela2_p = date_create("16:00");
    $niedziela2_k = date_create("18:50");

    $pon_suma = date_diff($poniedziałek2_k, $poniedziałek2_p)->h * 60 + 59 ;
    $wto_suma = date_diff($wtorek2_k,$wtorek2_p)->h * 60 + 10;
    $sro_suma = date_diff($sroda2_k, $sroda2_p)->h * 60 + 40;
    $czw_suma = date_diff($czwartek2_k, $czwartek2_p)->h * 60 + 40;
    $pi_suma = date_diff($piatek2_k, $piatek2_p)->h * 60 + 20;
    $so_suma = date_diff($sobota2_k, $sobota2_p)->h * 60 + 30;
    $nie_suma = date_diff($niedziela2_k, $niedziela2_p)->h * 60 + 50;
    $tyg_suma = $pon_suma+$wto_suma+$sro_suma+$czw_suma+$pi_suma+$so_suma+$nie_suma;
    $tyg_srednia = intdiv($tyg_suma,60);
    $srednia = $tyg_suma /7;

    $sms = $tyg_suma * 60 ;

    $dni = gmdate('d', $sms / 86400) ;
    $godminsek = gmdate('H:i:s', $sms)
    ?>
</head>

<body>
    <table>
        <tr>
            <th style="border: none;"></th>
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
            <td>od <time><?= $poniedziałek_p ?></time> do <time><?= $poniedziałek_k ?></time></td>
            <td>od <time><?= $wtorek_p ?></time> do <time><?= $wtorek_k ?></time></td>
            <td>od <time><?= $sroda_p ?></time> do <time><?= $sroda_k ?></time></td>
            <td>od <time><?= $czwartek_p ?></time> do <time><?= $czwartek_k ?></time></td>
            <td>od <time><?= $piatek_p ?></time> do <time><?= $piatek_k ?></time></td>
            <td>od <time><?= $sobota_p ?></time> do <time><?= $sobota_k ?></time></td>
            <td>od <time><?= $niedziela_p ?></time> do <time><?= $niedziela_k ?></time></td>
        </tr>
        <tr>
            <td>Różnica [h:m]</td>
            <td><time><?= date_diff($poniedziałek2_k, $poniedziałek2_p)->h ?>:<?= date_diff($poniedziałek2_k, $poniedziałek2_p)->i ?></time> <strong>(<?= date_diff($poniedziałek2_k, $poniedziałek2_p)->h * 60 + 30 ?>)</strong>minut</td>
            <td><time><?= date_diff($wtorek2_k, $wtorek2_p)->h ?>:<?= date_diff($wtorek2_k, $wtorek2_p)->i ?></time> <strong>(<?= date_diff($wtorek2_k, $wtorek2_p)->h * 60 + 10 ?>)</strong>minut</td>
            <td><time><?= date_diff($sroda2_k, $sroda2_p)->h ?>:<?= date_diff($sroda2_k, $sroda2_p)->i ?></time> <strong>(<?= date_diff($sroda2_k, $sroda2_p)->h * 60 + 40 ?>)</strong>minut</td>
            <td><time><?= date_diff($czwartek2_k, $czwartek2_p)->h ?>:<?= date_diff($czwartek2_k, $czwartek2_p)->i ?></time> <strong>(<?= date_diff($czwartek2_k, $czwartek2_p)->h * 60 + 40 ?>)</strong>minut</td>
            <td><time><?= date_diff($piatek2_k, $piatek2_p)->h ?>:<?= date_diff($piatek2_k, $piatek2_p)->i ?></time> <strong>(<?= date_diff($piatek2_k, $piatek2_p)->h * 60 + 20 ?>)</strong>minut</td>
            <td><time><?= date_diff($sobota2_k, $sobota2_p)->h ?>:<?= date_diff($sobota2_k, $sobota2_p)->i ?></time> <strong>(<?= date_diff($sobota2_k, $sobota2_p)->h * 60 + 30 ?>)</strong>minut</td>
            <td><time><?= date_diff($niedziela2_k, $niedziela2_p)->h ?>:<?= date_diff($niedziela2_k, $niedziela2_p)->i ?></time> <strong>(<?= date_diff($niedziela2_k, $niedziela2_p)->h * 60 + 50 ?>)</strong>minut</td>
        </tr>
        <tr>
            <td style="border: none;"></td><th colspan="7">Suma: <time><?= intdiv($tyg_suma,60)?>:<?=$tyg_suma%60?></time> (<strong><?=$tyg_suma ?></strong>minut)</th>
        </tr>
        <tr>
        <td style="border: none;"></td><th colspan="7">Średnio dziennie: <time><?=intdiv($srednia,60)?>:<?=$srednia%60?></time> (<strong><?=number_format( $srednia , 2) ?></strong>minut)</th>
        </tr>
        <tr>
        <td style="border: none;"></td><th colspan="7">Suma [dni : godziny : minuty : sekundy]: <time><?=date('d',intdiv($tyg_suma,1440)) ?>:<?=$godminsek ?></time></th>
        </tr>
    </table>
</body>
</html>