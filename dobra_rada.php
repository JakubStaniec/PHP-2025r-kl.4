<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php define('Dobra_rada',"Bez chleba to się nie najesz.") ?>
<h3> Stała ma wartość: <?= Dobra_rada ?> </h3> 

<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>strlen:</span></b> <?= strlen(Dobra_rada)?></p> 
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>str_word_count:</span></b>  <?= str_word_count(Dobra_rada)?></p>       
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>strrev:</span></b>  <?= strrev(Dobra_rada)?></p>           
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>strpos:</span></b>  <?= strpos(Dobra_rada)?></p>              
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>str_replace:</span></b> <?= str_replace(Dobra_rada)?></p>            
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>strtolower:</span></b>  <?= strtolower(Dobra_rada)?></p>         
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>strtoupper:</span></b>  <?= strtoupper(Dobra_rada)?></p>       
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>ucwords:</span></b>  <?= ucwords(Dobra_rada)?></p>        
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>trim:</span></b>     <?= trim(Dobra_rada)?></p>          
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>strstr:</span></b>  <?= strstr(Dobra_rada)?></p>         
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>substr:</span></b>    <?= substr(Dobra_rada)?></p>        
<p>Do stałej DOBRA_RADA stosuję funkcję <b><span>str_pad:</span></b>    <?= str_pad(Dobra_rada)?></p>         

</body>
</html>