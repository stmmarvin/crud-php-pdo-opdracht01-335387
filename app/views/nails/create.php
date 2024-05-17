<?php require_once APPROOT . '/views/includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bling Bling Nail Studio Chantal</h1>


<form action="<?= URLROOT;?>/nails/create" method="post">
    <p for="nail_colors">Kies de 4 basis kleuren voor uw nagels:</p><br>
    <input type="color" id="nail_colors1" name="nail_colors[]" value="#ff0000"multiple required>
    <input type="color" id="nail_colors2" name="nail_colors[]" value="#0000FF"multiple required>
    <input type="color" id="nail_colors3" name="nail_colors[]" value="#FFFF00"multiple required>
    <input type="color" id="nail_colors4" name="nail_colors[]" value="#008000"multiple required><br><br>

    <label for="phone_number">Telefoonnummer:</label>
    <input type="tel" id="phone_number" name="phone_number" required><br><br>

    <label for="email">Emailadres:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="appointment_datetime">Afspraak datum/tijd:</label>
    <input type="datetime-local" id="appointment_datetime" name="appointment_datetime" required><br><br>

    <label for="behandeling">Soort behandeling:</label><br>
    <input type="checkbox" id="behandeling1" name="behandeling[]" value="behandeling 1">
    <label for="behandeling1">Nagelbijt arrangement (termijnbetaling mogelijk) €180</label><br>
    <input type="checkbox" id="behandeling2" name="behandeling[]" value="behandeling 2">
    <label for="behandeling2">Luxe manicure (massage en handpakking) €30,00 </label><br>
    <input type="checkbox" id="behandeling3" name="behandeling[]" value="behandeling 3">
    <label for="behandeling3">Nagelreparatie per nagel (in eerste week gratis) €5,00 </label><br><br>

    <input type="hidden" name="form_submission_datetime" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <button type="reset" class="">Reset</button>
    <button type="submit" class="btn btn-primary">Sla op</button>
</form>
</body>
</html>


<?php require_once APPROOT . '/views/includes/footer.php'; ?>