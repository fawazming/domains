<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RayyanTech Dashboard</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fawazming/cdn@master/sbadminp/css/styles.css">
        <link rel="icon" type="image/x-icon" href="<?=base_url()?>/assets/img/favicon.png" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="nav-fixed">        
        <!-- SideNav -->
            <?= $this->include('admin/partials/header') ?>
        <!-- SideNav -->
        <div id="layoutSidenav">
            <!-- SideNav -->
                <?= $this->include('admin/partials/sidenav') ?>
            <!-- SideNav -->
            <div id="layoutSidenav_content">
                <main>
                    <?= $this->renderSection('main') ?>
                </main>
                <!-- footer -->
                    <?= $this->include('admin/partials/footer') ?>
                <!-- footer -->
            </div>
        </div>
        <script src="<?=base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>/assets/js/scripts.js"></script>
</body>
</html>
