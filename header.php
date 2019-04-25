<!doctype html>
<html lang="en">
<head>
    <title>:: PLN :: Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="<?= $site_url ?>/logo_single.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/toastr/toastr.min.css">

    <!-- DATE PICKER -->
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <!-- DRAG&DROP -->
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/dropify/css/dropify.min.css">
    <!-- TODOLIST -->
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/morrisjs/morris.min.css" />
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/nestable/jquery-nestable.css" />
    <!-- CALENDAR -->
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= $site_url ?>/assets/vendor/summernote/dist/summernote.css"/>


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= $site_url ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?= $site_url ?>/assets/css/color_skins.css">
    
</head>

<body class="theme-orange">

    <?php require_once 'page_loader.php' ?>

    <!-- Overlay For Sidebars -->
    <div id="wrapper">
        <?php
        require_once 'navbar.php';
        if ($user['status'] == 'admin')
            require_once 'sidebar_admin.php';
        else
          
        
        ?>