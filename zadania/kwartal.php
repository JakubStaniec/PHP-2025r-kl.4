<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
h1{
    border-top: 4px dotted pink;
    text-align: center;
    border-bottom: 4px dotted pink;
}
h3{
    border-top: 2px dashed pink;
    font-family: cursive;
    text-align: center;
    border-bottom: 2px dashed pink;
}
</style>


</head>
<body>
    <h1>
    <?php
    $miesiac = rand(1, 15) ;
    print($miesiac);
    ?>
    </h1>




    <h3>
        <?php
        switch($miesiac){
        case 1:
        case 2:
        case 3:
            print("<span>I Kwartał</span>");
        break;
        case 4:
        case 5:
        case 6:
            print("<span>II Kwartał</span>");
        break;
        case 7:
        case 8:
        case 9:
            print("<span>III Kwartał</span>");
        break;
        case 10:
        case 11:
        case 12:
            print("<span>VI Kwartał</span>");
        break;
        default: print("<span>Błędny numer miesiąca</span>");
        } 
        ?>
    </h3>










</body>
</html>