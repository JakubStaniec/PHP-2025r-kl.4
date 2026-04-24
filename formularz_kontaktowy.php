<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz kontaktowy</title>

    <style>
        .form-box {
            width: 320px;
            background: lightblue;
            padding: 15px;
            margin: 40px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        .req {
            color: red;
        }

        input,
        select,
        textarea {
            width: 80%;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid #999;
        }

        textarea {
            height: 70px;
        }

        .error {
            color: red;
            font-size: 13px;
        }

        .error-border {
            border: 2px solid red ;
        }

        .success {
            color: red;
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <?php
    $errors = [];
    $success = "";

    $imie = $_POST['imie_i_naz'] ?? '';
    $email = $_POST['email'] ?? '';
    $wiek = $_POST['wiek'] ?? '';
    $wiadomosc = $_POST['wiadomosc'] ?? '';
    $zgoda = isset($_POST['zgoda']);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {


       
        if (empty($imie)) { 
            $errors['imie_i_naz'] = "To pole musi zawierać co najmniej dwa wyrazy";
        }

      
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Podaj poprawny adres email";
        }

     
        if ($wiek == "") {
            $errors['wiek'] = "Wybierz swój przedział wiekowy";
        }

        
        if (strlen(str_replace(" ","",$wiadomosc)) <10) {

        }

        
        if (!$zgoda) {
            $errors['zgoda'] = "Potwierdź swoją zgodę";
        }

      
        if (empty($errors)) {
            $success = "Dane z formularza zostały zapisane do pliku formularz_kontaktowy.txt";

            $dane = "Imię: $imie\nEmail: $email\nWiek: $wiek\nWiadomość: $wiadomosc\n---\n";
            file_put_contents("formularz_kontaktowy.txt", $dane, FILE_APPEND);
        }
    }
    ?>

    <div class="form-box">

        <form method="post">

            <label>Imię i nazwisko <span class="req">*</span></label>
            <input type="text" name="imie"
                class="<?= isset($errors['imie_i_naz']) ? 'error-border' : '' ?>"
                value="<?= htmlspecialchars($imie) ?>">
            <div class="error"><?= $errors['imie_i_naz'] ?? '' ?></div>



            <label>Adres email <span class="req">*</span></label>
            <input type="text" name="email"
                class="<?= isset($errors['email']) ? 'error-border' : '' ?>"
                value="<?= htmlspecialchars($email) ?>">
            <div class="error"><?= $errors['email'] ?? '' ?></div>




            <label>Przedział wiekowy <span class="req">*</span></label>
            <select name="wiek" class="<?= isset($errors['wiek']) ? 'error-border' : '' ?>">
                <option value="">-- wybierz --</option>
                <option value="0-25" <?= $wiek == '0-25' ? 'selected' : '' ?>>do 25</option>
                <option value="25-50" <?= $wiek == '25-50' ? 'selected' : '' ?>>25–50</option>
                <option value="50-75" <?= $wiek == '50-75' ? 'selected' : '' ?>>50–75</option>
                <option value="75+" <?= $wiek == '75+' ? 'selected' : '' ?>>powyżej 75</option>
            </select>
            <div class="error"><?= $errors['wiek'] ?? '' ?></div>




            <label>Wiadomość <span class="req">*</span></label>
            <textarea name="wiadomosc"
                class="<?= isset($errors['wiadomosc']) ? 'error-border' : '' ?>"><?= htmlspecialchars($wiadomosc) ?></textarea>
            <div class="error"><?= $errors['wiadomosc'] ?? '' ?></div>





            <label>
                <input type="checkbox" name="zgoda" <?= $zgoda ? 'checked' : '' ?>><br>
                Zgoda na przetwarzanie danych <span class="req">*</span>
            </label>
            <div class="error"><?= $errors['zgoda'] ?? '' ?></div>





            <button type="submit">Wyślij</button>

        </form>

        <?php if ($success): ?>
            <div class="success"><?= $success ?></div>
        <?php endif; ?>

    </div> <?php
if ($validForm) { 
    if (file_exists($fileName)) {
        $myFile = fopen($fileName, 'a'); 
    } else {
        $myFile = fopen($fileName, 'w');
    }
    $myData = date('Y-m-d H:i:s') . "\n" . print_r($_POST, true); 
    fwrite($myFile, $myData);
    fclose($myFile);
    $validMessage = 'Dane z formularza zostały zapisane do pliku ' . $fileName;
} ?>
</body>

</html>