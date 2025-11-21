<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    font-size: 20px;
}
p{
padding: 5px;

}

#a{
    color: yellowgreen;
    border: green dotted;
}

#b{
    color: maroon; border: maroon dashed 2px; border-radius: 5px;
}

#c{
color: darkcyan;
border-left: solid cyan 3px;

}

</style>
</head>
<body>
<p id="a"> Data za 10 tygodni: <?= date("d-m-Y" , strtotime("+10 weeks"))?></p>           
<p id="b"> Wigilia w roku 2222 wypada w <?= date("N" , mktime(0,0,0,12,24,2222))?></p>      
<p id="c">Stan wojenny w Polsce wprowadzono i była to <?= date("l" , mktime(0,0,0,12,13,1981))?></p> 





</body>
</html>