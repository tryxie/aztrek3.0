<?php
require_once __DIR__ . "/../../../model/database.php";

$id = $_GET["id"];

$country = getOneRow("country", $id);

require_once __DIR__ . "/../../layout/header.php";
?>

    <h1>Modification d'une destination</h1>

    <form action="update_query.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Label</label>
            <input type="text" name="label" value="<?= $country["label"]; ?>" class="form-control" placeholder="Label" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="description" value="<?= $country["label"]; ?>" class="form-control" placeholder="Label" required>
        </div>
        <div class="form-group">
            <label>Picto</label>
            <input type="file" name="picto" class="form-control">
            <?php if ($country["picto"]): ?>
                <img src="../../../uploads/country/<?= $country["picto"]; ?>" class="img-thumbnail">
            <?php endif; ?>
        </div>
        <input type="hidden" name="id" value="<?= $country["id"]; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>
<?php require_once __DIR__ . "/../../layout/footer.php"; ?>