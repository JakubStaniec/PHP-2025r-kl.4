<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p{
background-color: lightsteelblue;
border: dotted 2px blueviolet;
border-radius: 5px;
font-style: italic;
padding: 15px;
}

</style>

</head>
<body>
    <?php
    $data = date("l" ,mktime(0,0,0,9,1,2025));
    $dzien = date("z" ,mktime(0,0,0,9,1,2025)) + 1;
    
    
    ?>

    <p>Rozpoczęcie roku szkolnego odbyło się w <?=$data?> i był to <?=$dzien?> dzień roku. </p>


</body>
</html>