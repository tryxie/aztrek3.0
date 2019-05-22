<?php require_once __DIR__ . '/../../functions.php'; ?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/admin/", true) ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>">
                    <i class="fa fa-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/country/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/country/">
                    <i class="fa fa-server"></i>
                    Destinations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/sejour/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/sejour/">
                    <i class="fa fa-book"></i>
                    Séjours
                </a>
            </li>
        </ul>
    </div>
</nav>