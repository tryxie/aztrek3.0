<?php require_once __DIR__ . "/../../layout/header.php"; ?>

<h1>Ajout d'une destination</h1>

<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Label</label>
        <input type="text" name="label" class="form-control" placeholder="Destination" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control" placeholder="Description" required>
    </div>
    <div class="form-group">
        <label>Picto</label>
        <input type="file" name="picto" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>