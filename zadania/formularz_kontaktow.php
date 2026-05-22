<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ankieta</title>
    <style>
        body {
            font-family: Arial;
        }
        
        legend {
            font-weight: bold;
            font-size: 18px;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        .required {
            color: red;
        }
    </style>
</head>
<body>
  <?php
$imie = "";
$nazwisko = "";
$rola = "";
$errors = [
    "imie_i_nazwisko" => "",
    "email" => "",
    "wiek" => "",
    "przedzial_wiekowy" => "",
    "wiadomosc" => ""
];

?>
<form method="post">
    

        Imię i nazwisko: <span class="required">*</span>
        <span class="error"><?= $errors["imie_i_nazwisko"] ?></span><br>
        <input type="text" name="imie" value="<?=$imie ?>"><br>
     

        Adres E-mail: <span class="required">*</span>
          <span class="error"><?= $errors["email"] ?></span><br>
        <input type="text" name="email" value="<?=$nazwisko ?>"><br>

        Przedział wiekowy: <span class="required">*</span>
          <span class="error"><?= $errors["przedzial_wiekowy"] ?></span><br>
        <input type="text" name="przedzial_wiekowy" value="<?=$nazwisko ?>"><br>

        Wiadomość <span class="required">*</span>
          <span class="error"><?= $errors["wiadomosc"] ?></span><br>
        <input type="text" name="wiadomosc" value="<?=$nazwisko ?>"><br>

        <input type="submit" value="Wyślij">
    
</form>

</body>
</html>