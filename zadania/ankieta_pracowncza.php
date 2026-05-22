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
        fieldset {
            border: 4px solid yellowgreen;
            width: 350px;
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
    "imie" => "",
    "nazwisko" => "",
    "rola" => ""
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $imie = trim($_POST["imie"] ?? ""); //??-Sluzy on do sprawdzenia, czy zmienna jest ustawiona i rozna od null, a jeśli nie — zwraca wartosc domyslną 
    //null to specjalna wartosc oznaczajaca brak jakiejkolwiek wartosci przypisanej do zmiennej//
    $nazwisko = trim($_POST["nazwisko"] ?? "");
    $rola = $_POST["rola"] ?? "";

    if (empty($imie)) {
        $errors["imie"] = "Imie jest wymagane";
    }

    if (empty($nazwisko)) {
        $errors["nazwisko"] = "Nazwisko jest wymagane";
    }

    if (empty($rola)) {
        $errors["rola"] = "Wybierz jedną opcję";
    }
}
?>
<form method="post">
    <fieldset>
        <legend>Ankieta</legend>

        Imię: <span class="required">*</span>
        <span class="error"><?= $errors["imie"] ?></span><br>
        <input type="text" name="imie" value="<?=$imie ?>"><br>
     

        Nazwisko: <span class="required">*</span>
          <span class="error"><?= $errors["nazwisko"] ?></span><br>
        <input type="text" name="nazwisko" value="<?=$nazwisko ?>"><br>
       

        Wybierz jedną opcję: <span class="required">*</span>
        <span class="error"><?= $errors["rola"] ?></span><br>
        <input type="radio" name="rola" value="uczen" <?= ($rola=="uczen")?"checked":"" ?>> uczeń<br>
        <input type="radio" name="rola" value="absolwent" <?= ($rola=="absolwent")?"checked":"" ?>> absolwent<br>
        <input type="radio" name="rola" value="nauczyciel" <?= ($rola=="nauczyciel")?"checked":"" ?>> nauczyciel<br>
        <input type="radio" name="rola" value="pracownik administracji" <?= ($rola=="pracownik administracji")?"checked":"" ?>> pracownik administracji<br>
       

        <input type="submit" value="Wyślij">
    </fieldset>
</form>

</body>
</html>




