<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo SITE_ADMIN; ?>">Administration</a>
    <ul class="navbar-nav px-3 flex-row">
        <li class="nav-item mr-3">
            <a href="<?= SITE_URL; ?>" class="nav-link">
                <i class="fa fa-external-link"></i>
                Front
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <?= $user["email"]; ?>
            </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i>
                    Mon profil
                </a>
                <a href="<?php echo SITE_ADMIN; ?>logout.php" class="dropdown-item">
                    <i class="fa fa-sign-out"></i>
                    Déconnexion
                </a>
            </div>
        </li>
    </ul>
</nav>