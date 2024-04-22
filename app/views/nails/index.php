<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bling Bling Nail Studio Chantal</h1>
    
<form action="process_form.php" method="post">
    <label for="nail_colors">Kies de 4 basis kleuren voor uw nagels:</label>
    <input type="color" id="nail_colors1" name="nail_colors[]" multiple required><br><br>
    <input type="color" id="nail_colors2" name="nail_colors[]" multiple required><br><br>
    <input type="color" id="nail_colors3" name="nail_colors[]" multiple required><br><br>
    <input type="color" id="nail_colors4" name="nail_colors[]" multiple required><br><br>

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

    <input type="reset" value="Reset"><br><br>

    <input type="hidden" name="form_submission_datetime" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <input type="submit" value="sla op">
</form>
</body>
</html>



