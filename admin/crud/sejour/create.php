<?php
require_once __DIR__ . "/../../../model/database.php";

$countries = getAllRows("country");

require_once __DIR__ . "/../../layout/header.php";
?>

<h1>Ajout d'un séjour</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre" class="form-control" placeholder="Titre" required>
    </div>
    <div class="form-group">
        <label>Destinations</label>
        <select name="country_id" class="form-control">
            <?php foreach ($countries as $country) : ?>
                <option value="<?= $country["id"]; ?>">
                    <?= $country["label"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Prix</label>
        <input type="number" name="prix" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Durée</label>
        <input type="time" name="duree" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>