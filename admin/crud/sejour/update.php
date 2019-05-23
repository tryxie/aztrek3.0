<?php
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];

$country = getOneRow("country", $id);
$country = getAllRows("country");

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modification d'un sejour</h1>

    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" value="<?= $sejour["titre"]; ?>" class="form-control" placeholder="titre" required>
        </div>
        
        <div class="form-group">
            <label>Destination</label>
            <select name="service_id" class="form-control">
                <?php foreach ($services as $service) : ?>
                    <?php $selected = ($realisation["service_id"] == $service["id"]) ? "selected" : ""; ?>
                    <option value="<?= $service["id"]; ?>" <?= $selected; ?>>
                        <?= $service["label"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="hidden" name="id" value="<?= $sejour["id"]; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>