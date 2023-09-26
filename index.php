<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Collection BPRS</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Tambahkan link AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Tambahkan konten header AdminLTE di sini -->
            <!-- Misalnya, tombol Sidebar Toggle -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        
        <?php include 'sidebar.php'; ?>

        <div class="content-wrapper">
            <!-- Konten Utama -->
            <main class="content">
                <?php
                if(isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if($page == 'dashboard') {
                        echo "<h2>Dashboard Content</h2>";
                    }
                    elseif($page == 'transaction') {
                        header("Location: transaction.php");
                        exit;
                    }
                    elseif($page == 'reportingtransaction') {
                        header("Location: reportingtransaction.php");
                        exit;
                    }
                    elseif($page == 'usermanagement') {
                        header("Location: usermanagement.php");
                        exit;
                    }
                    elseif($page == 'presentase') {
                        header("Location: chartreporting.php");
                        exit;
                    }
                } else {
                    echo "<h2>Welcome to Reporting System BPRS</h2>";
                }
                // include_once 'sidebar.php';
                ?>
            </main>
        </div>

<?php include 'footer.php'; ?>
    </div>

    <!-- Tambahkan skrip Bootstrap dan AdminLTE JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>
</html>
