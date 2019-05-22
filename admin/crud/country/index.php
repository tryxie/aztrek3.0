<?php
require_once __DIR__ . "/../../../model/database.php";

$countries = getAllRows("country");

require_once __DIR__ . "/../../layout/header.php";
?>

<h1>Gestion des destinations</h1>

<a href="create.php" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Ajouter
</a>

<!-- Affichage des erreurs -->
<?php if (isset($_GET["errcode"])): ?>
    <div class="alert alert-danger">
        <i class="fa fa-times"></i>
        <?php if ($_GET["errcode"] == 23000): ?>
            Erreur lors de la suppression.
        <?php else: ?>
            Une erreur est survenue...
        <?php endif; ?>
    </div>
<?php endif; ?>

<hr>

<table class="table table-striped table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Label</th>
            <th>Picto</th>
            <th class="actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($countries as $country) : ?>
            <tr>
                <td><?= $country["label"]; ?></td>
                <td>
                    <img src="../../../uploads/country/<?= $country["picto"]; ?>" class="img-thumbnail" alt="">
                </td>
                <td class="actions">
                    <a href="update.php?id=<?= $country["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete_query.php" method="post">
                        <input type="hidden" name="id" value="<?= $service["id"]; ?>">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once __DIR__ . "/../../layout/footer.php" ?>