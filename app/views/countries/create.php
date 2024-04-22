<?php require_once APPROOT . '/views/includes/header.php'; ?>



<!--Maak een formulier om gegevens in de Country tabel te kunnen opslaan-->



<div class="container">

 <div class="row mt-3">
    <div class="col-3">
    </div>
        <div class="col-6">
        <h3><?=$data['title'];?></h3>
    </div>
    <div class="col-3"></div>
 </div>

<div class="row mt-3">
    <div class="col-3">
    </div>
    <div class="col-6">
        <form action="<?= URLROOT; ?>/countries/create" method="post">
        <div class="col-sm">
            <label for="name">Land:</label>
            <input name="country" type="text" class="form-control" id="InputNameCountry" placeholder="Vul hier de naam van het land in" aria-label="Name">
            </div>

            <div class="col-sm">
            <label for="capital">hoofdstad:</label>
            <input name="capitalcity" type="text" class="form-control" id="InputNamecapital" placeholder="Vul hier de naam van de hoofdstad in" aria-label="CapitalCity">
            </div>

            <div class="col-sm">
            <label for="continent">Continent:</label>
            <input name="continent" type="text" class="form-control" id="InputNamecontinent" placeholder="Vul hier de naam van het continent in" aria-label="Continent">
            </div>

            <div class="col-sm">
            <label for="population">Inwoners:</label>
            <input name="population" type="text" class="form-control" id="InputNamepopulation" placeholder="Vul hier de naam van de inwoners in" aria-label="Population">
        </div>
        <div class="d-grid mt-3">
        <button type="submit" class="btn btn-dark">Verstuur de gegevens</button>
        </div>
        </form>
    </div>
    <div class="col-3">
    </div>
</div>
<div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <a href="<?= URLROOT; ?>/homepages/index">Homepage</a>
        </div>
        <div class="col-3"></div>
    </div>
</div>      


<?php require_once APPROOT . '/views/includes/footer.php'; ?>