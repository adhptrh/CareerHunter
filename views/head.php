<?php

$user = null;

if (isset($_SESSION["id"])) {
    if ($_SESSION["role"] == Role::$user) {
        $userr = new User($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
    }
    if ($_SESSION["role"] == Role::$user_perusahaan) {
        $userr = new UserPerusahaan($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
    }
    if ($_SESSION["role"] == Role::$admin) {
        $userr = new Admin($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="index"><?php echo $appname; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Lowongan Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Perusahaan</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <?php
                    if (isset($_SESSION["id"])) {
                        if ($_SESSION["role"] == Role::$user) {

                            echo '<div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                ' . $user["nama"] . '
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Edit Profil</a></li>
                                <li><a class="dropdown-item" href="actions/logout">Keluar</a></li>
                            </ul>
                        </div>';
                        }
                        if ($_SESSION["role"] == Role::$user_perusahaan) {

                            echo '<div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                ' . $user["username"] . '
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Edit Profil</a></li>
                                <li><a class="dropdown-item" href="actions/logout">Keluar</a></li>
                            </ul>
                        </div>';
                        }
                        if ($_SESSION["role"] == Role::$admin) {

                            echo '<div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                ' . $user["username"] . '
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Edit Profil</a></li>
                                <li><a class="dropdown-item" href="actions/logout">Keluar</a></li>
                            </ul>
                        </div>';
                        }
                    } else {
                        echo '<a class="nav-link active text-white" aria-current="page" href="masuk">Masuk</a>
                        <a class="nav-link active text-white" aria-current="page" href="daftar">Daftar</a>';
                    }
                    ?>

                </form>
            </div>
        </div>
    </nav>