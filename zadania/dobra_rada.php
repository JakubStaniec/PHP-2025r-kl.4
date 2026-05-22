<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.funkcja {
    background-color: pink;
border: 2px solid;
border-color: red;
border-radius: 10px;

}



    </style>
</head>
<body>
    <?php define('Dobra_rada',"Bez chleba to się nie najesz.") ?>
<h3> Stała ma wartość: <?= Dobra_rada ?> </h3> 

<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>strlen:</span></b> <?= strlen(Dobra_rada)?></p> 
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>str_word_count:</span></b>  <?= str_word_count(Dobra_rada)?></p>       
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>strrev:</span></b>  <?= strrev(Dobra_rada)?></p>           
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>strpos:</span></b>  <?= strpos(Dobra_rada, "to")?></p>              
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>str_replace:</span></b> <?= str_replace(Dobra_rada, "chleba", "mięsa")?></p>            
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>strtolower:</span></b>  <?= strtolower(Dobra_rada)?></p>         
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>strtoupper:</span></b>  <?= strtoupper(Dobra_rada)?></p>       
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>ucwords:</span></b>  <?= ucwords(Dobra_rada)?></p>        
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>trim:</span></b>     <?= trim(Dobra_rada)?></p>          
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>strstr:</span></b>  <?= strstr(Dobra_rada, "nie")?></p>         
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>substr:</span></b>    <?= substr(Dobra_rada, 10, 4)?></p>        
<p>Do stałej DOBRA_RADA stosuję funkcję <b class="funkcja"><span>str_pad:</span></b>    <?= str_pad(Dobra_rada, 41, " -_- ", STR_PAD_BOTH)?></p>        


</body>
</html>