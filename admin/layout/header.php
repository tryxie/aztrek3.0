<?php
require_once __DIR__ . '/../../config/parameters.php';
require_once __DIR__ . '/../security.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Administration</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo SITE_ADMIN; ?>node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo SITE_ADMIN; ?>node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo SITE_ADMIN; ?>node_modules/select2/dist/css/select2.min.css" rel="stylesheet"/>
        <link href="<?php echo SITE_ADMIN; ?>node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>

        <!-- Custom styles for this template -->
        <link href="<?php echo SITE_ADMIN; ?>css/dashboard.css" rel="stylesheet">
        <link href="<?php echo SITE_ADMIN; ?>css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php require_once __DIR__ . '/menu-top.php'; ?>

        <div class="container-fluid">
            <div class="row">
                <?php require_once __DIR__ . '/menu-left.php'; ?>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
