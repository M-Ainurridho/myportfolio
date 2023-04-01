<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= BASEURL ?>/favicon.ico" type="image/x-icon">
    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c92e202055.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/navbar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <title><?= $data['title'] ?> | Ainurridho's Portfolio</title>
</head>

<?php if (isset($_SESSION['theme'])) : ?>

    <body data-bs-theme="dark">
    <?php else : ?>

        <body data-bs-theme="light">
        <?php endif; ?>


        <!-- Navbar -->
        <nav class="navbar bg-body-tertiary fixed-top shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Left -->
                <div class="navbar-left d-flex">
                    <a class="navbar-brand" href="<?= BASEURL ?>/">
                        <img src="<?= BASEURL; ?>/images/brand.png" alt="Bootstrap" width="30" height="24">
                    </a>
                    <div class="navbar-nav d-block">
                        <a class="nav-link d-inline-block me-2" aria-current="page" href="<?= BASEURL; ?>/">Home</a>
                        <a class="nav-link d-inline-block me-2" href="<?= BASEURL; ?>/projects">Projects</a>
                        <a class="nav-link d-inline-block me-2" href="<?= BASEURL; ?>/gallery">Gallery</a>
                    </div>
                </div>
                <!-- Navbar Right -->
                <div class="navbar-right d-flex align-items-center">
                    <div class="dropdown me-3">
                        <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= BASEURL; ?>/images/nophoto.jpg" class="rounded-circle" alt="admin" height="30" width="30"></a>
                        <ul class="dropdown-menu mt-1">
                            <?php if (isset($_SESSION['login'])) : ?>
                                <li><a class="dropdown-item" href="<?= BASEURL; ?>/admin/projects">Dashboard</a></li>
                            <?php else : ?>
                                <li><a class="dropdown-item" href="<?= BASEURL; ?>/login">Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="theme">
                        <small>light/dark</small><br />
                        <?php if (isset($_SESSION['theme'])) : ?>
                            <i class="fa-solid fa-toggle-on text-reset text-decoration-none" onclick="dark('<?= $data['title'] ?>')"></i>
                        <?php else : ?>
                            <i class="fa-solid fa-toggle-off text-reset text-decoration-none" onclick="light('<?= $data['title'] ?>')"></i>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Ainurridho's Portfolio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL ?>/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL ?>/projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL ?>/gallery">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->