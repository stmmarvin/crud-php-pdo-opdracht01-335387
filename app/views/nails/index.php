<?php require_once APPROOT . '/views/includes/header.php'; ?>
<h3><?php echo $data['title']; ?></h3>
<p><a href="<?=URLROOT; ?>/Nails/create">Maak een nieuwe afspraak</a></p>
<table class="table table-dark table-hover">
<thead>
    <th>Basiskleur 1</th>
    <th>Basiskleur 2</th>
    <th>Basiskleur 3</th>
    <th>Basiskleur 4</th>
    <th>Telefoonnummer</th>
    <th>Emailadres</th>
    <th>Afspraakdatum</th>
    <th>SoortBehandeling</th>
</thead>
<tbody>
    <?= $data['dataRows']; ?>
</tbody>
</table>

<a href="<?= URLROOT; ?>/homepages/index">Homepages</a>
<?php require_once APPROOT . '/views/includes/footer.php'; ?>



