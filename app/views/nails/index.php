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
    <input type="color" id="nail_colors" name="nail_colors[]" multiple required><br><br>

    <label for="phone_number">Telefoonnummer:</label>
    <input type="tel" id="phone_number" name="phone_number" required><br><br>

    <label for="email">Emailadres:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="appointment_datetime">Afspraak datum/tijd:</label>
    <input type="datetime-local" id="appointment_datetime" name="appointment_datetime" required><br><br>

    <label for="treatment">Soort behandeling:</label><br>
    <input type="checkbox" id="treatment1" name="treatment[]" value="Treatment 1">
    <label for="treatment1">Treatment 1</label><br>
    <input type="checkbox" id="treatment2" name="treatment[]" value="Treatment 2">
    <label for="treatment2">Treatment 2</label><br>
    <input type="checkbox" id="treatment3" name="treatment[]" value="Treatment 3">
    <label for="treatment3">Treatment 3</label><br><br>

    <input type="reset" value="Reset"><br><br>

    <input type="hidden" name="form_submission_datetime" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <input type="submit" value="Verzenden">
</form>
</body>
</html>



