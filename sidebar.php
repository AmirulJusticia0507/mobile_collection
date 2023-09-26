<?php
// sidebar.php

function isPageActive($pageName) {
    if (isset($_GET['page']) && $_GET['page'] == $pageName) {
        return 'active';
    }
    return '';
}

function createSidebarLink($pageName, $iconClass, $displayText) {
    $activeClass = isPageActive($pageName);
    $link = $_SERVER['SCRIPT_NAME'] . '?page=' . $pageName;
    
    echo '<li class="nav-item">';
    echo '<a href="' . $link . '" class="nav-link ' . $activeClass . '">';
    echo '<i class="' . $iconClass . ' nav-icon"></i>';
    echo '<p>' . $displayText . '</p>';
    echo '</a>';
    echo '</li>';
}
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Tambahkan konten sidebar AdminLTE di sini -->
    <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light">Sistem Reporting</span>
    </a>
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column nowrap" data-widget="treeview" role="menu" data-accordion="false" >
            <?php
            createSidebarLink('dashboard', 'fa fa-tachometer-alt', 'Dashboard');
            createSidebarLink('reportingkeuangan', 'fa fa-file-invoice-dollar', 'Reporting Keuangan');
            createSidebarLink('reportingagunanumkm', 'fa fa-file-invoice-dollar', 'Reporting Agunan UMKM');
            createSidebarLink('informasidebitur','fa fa-file-invoice-dollar','Informasi Debitur');
            createSidebarLink('usermanagement', 'fa fa-users', 'User Management');
            createSidebarLink('presentase', 'fa fa-chart-pie', 'Presentase');
            ?>

            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="collapse" data-target="#logoutCollapse">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>
                        Logout
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <div class="collapse" id="logoutCollapse">
                    <form method="post">
                        <button type="submit" class="btn btn-link" name="logout">
                            Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</aside>
<!-- Skrip JavaScript untuk mengontrol pushmenu -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const pushMenuButton = document.querySelector(".nav-link[data-widget='pushmenu']");
        const body = document.querySelector("body");

        pushMenuButton.addEventListener("click", function (e) {
            e.preventDefault();
            body.classList.toggle("sidebar-collapse");
            body.classList.toggle("sidebar-open");
        });
    });
</script>
