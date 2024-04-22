<?php require_once APPROOT . '/views/includes/header.php'; ?>

<h3><?php echo $data['title']; ?></h3>
<p><a href="<?= URLROOT; ?>/Countries/create">Nieuw land toevoegen</a></p>
<table class="table table-dark table-hover">
<thead>
        <th>Naam</th>
        <th>Hoofdstad</th>
        <th>Continent</th>
        <th>Aantal Inwoners</th>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<a href="<?= URLROOT; ?>/homepages/index">Homepages</a>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>
