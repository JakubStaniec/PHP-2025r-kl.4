<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tydzień</title>
    <style>
table{
border-collapse: collapse;
width: 100%;
}
th, td { 
    border: 2px dotted black;
    padding: 6px;
    text-align: center;
}

th {
    background-color: #cfe2ff;

}

th.last_row {
    background-color: #adc8f0;
    text-align: right;

}
tr:hover {
    background-color: #e6f2ff;


}
u{
font size: 120%;

}

</style>
</head>

<body>
<?php 
//taryfy
$tdzienna = 0.90;
$tnocna = 0.45;
//zużycia dzienne
$d_po = 5.2;
$d_w = 4.8;
$d_sro = 6.1;
$d_c = 5.5;
$d_pt = 6.4;
$d_sob = 4.9;
$d_n = 5.7;
//zużycia nocne
$n_po = 2.1;
$n_w = 2.6;
$n_s = 1.9;
$n_c = 2.3;
$n_pt = 2.8;
$n_sob = 3.2;
$n_n = 2.5;
//koszty
$koszt_dzienny_pon = $tdzienna * $d_po;
$koszt_dzienny_wt =  $tdzienna * $d_w;
$koszt_dzienny_sro = $tdzienna * $d_sro;
$koszt_dzienny_czw = $tdzienna * $d_c;
$koszt_dzienny_pt = $tdzienna * $d_pt;
$koszt_dzienny_sob = $tdzienna * $d_sob;
$koszt_dzienny_nie = $tdzienna * $d_n;
//koszty nocne
$koszt_nocny_pon = $tnocna * $n_po;
$koszt_nocny_wt = $tnocna * $n_w;
$koszt_nocny_sro = $tnocna * $n_s;
$koszt_nocny_czw = $tnocna * $n_c;
$koszt_nocny_pt = $tnocna * $n_pt;
$koszt_nocny_sob = $tnocna * $n_sob;
$koszt_nocny_nie = $tnocna * $n_n;
//dobowy koszt
$d_pon = $koszt_dzienny_pon + $koszt_nocny_pon;
$d_wt = $koszt_dzienny_wt + $koszt_nocny_wt;
$d_sr =$koszt_dzienny_sro + $koszt_nocny_sro;
$d_czw =$koszt_dzienny_czw + $koszt_nocny_czw;
$d_pia =$koszt_dzienny_pt + $koszt_nocny_pt;
$d_sobota =$koszt_dzienny_sob + $koszt_nocny_sob;
$d_nie =$koszt_dzienny_nie + $koszt_nocny_nie;
//z tygodnia koszt
$koszt_tyg = $d_pon + $d_wt + $d_sr + $d_czw + $d_pia + $d_sobota + $d_nie;

?>
   <h2><b> Zużycie energii elektrycznej — tydzień </h2></b>
   <h3><b>Taryfa dzienna: <u>0,90 zł/kWh   </u></h3></b>
   <h3><b>Taryfa nocna: <u>0,45 zł/kWh    </u></h3></b>
<table>
    <tr>
<th>Dzień</th>
<th>Zużycie dzienne [kWh]</th>
<th>Koszt dzienny [zł]</th>
<th>Zużycie nocne [kWh]</th>
<th>Koszt nocny [zł]</th>
<th>Koszt dobowy</th>
</tr>
<tr>
<td>Poniedziałek</td>
<td><?=str_replace(".", ",", $d_po)?></td>
<td><?=number_format($koszt_dzienny_pon, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_po)?></td>
<td><?=number_format($koszt_nocny_pon, 2, ",")?></td>
<td><?=number_format($d_pon, 2, ",")?></td>


</tr>
<tr>
<td>Wtorek</td>
<td><?=str_replace(".", ",", $d_w)?></td>
<td><?=number_format($koszt_dzienny_wt, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_w)?></td>
<td><?=number_format($koszt_nocny_wt, 2, ",")?></td>
<td><?=number_format($d_wt, 2, ",")?></td>


</tr>
<tr>
<td>Sroda</td>
<td><?=str_replace(".", ",", $d_sro)?></td>
<td><?=number_format($koszt_dzienny_sro, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_s)?></td>
<td><?=number_format($koszt_nocny_sro, 2, ",")?></td>
<td><?=number_format($d_sr, 2, ",")?></td>


</tr>
<tr>
<td>Czwartek</td>
<td><?=str_replace(".", ",", $d_c)?></td>
<td><?=number_format($koszt_dzienny_czw, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_c)?></td>
<td><?=number_format($koszt_nocny_czw, 2, ",")?></td>
<td><?=number_format($d_czw, 2, ",")?></td>


</tr>
<tr>
<td>Piątek</td>
<td><?=str_replace(".", ",", $d_pt)?></td>
<td><?=number_format($koszt_dzienny_pt, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_pt)?></td>
<td><?=number_format($koszt_nocny_pt, 2, ",")?></td>
<td><?=number_format($d_pia, 2, ",")?></td>


</tr>
<tr>
<td>Sobota</td>
<td><?=str_replace(".", ",", $d_sob)?></td>
<td><?=number_format($koszt_dzienny_sob, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_sob)?></td>
<td><?=number_format($koszt_nocny_sob, 2, ",")?></td>
<td><?=number_format($d_sobota, 2, ",")?></td>


</tr>
<tr>
<td>Niedziela</td>
<td><?=str_replace(".", ",", $d_n)?></td>
<td><?=number_format($koszt_dzienny_nie, 2, ",")?></td>
<td><?=str_replace(".", ",", $n_n)?></td>
<td><?=number_format($koszt_nocny_nie, 2, ",")?></td>
<td><?=number_format($d_nie, 2, ",")?></td>
</tr>

<tr>
    <th colspan="6" class="last_row"><b>Łączny koszt w całym tygodniu: <u><?= number_format($koszt_tyg, 2, ",", ",")?>zł</u></b></th>
</tr>
</table>






















</body>
</html>