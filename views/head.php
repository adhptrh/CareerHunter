<!DOCTYPE html>
<html>

<head>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="#"><?php echo $appname; ?></a>
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
                    <a class="nav-link active text-white" aria-current="page" href="masuk">Masuk</a>
                    <a class="nav-link active text-white" aria-current="page" href="daftar">Daftar</a>
                </form>
            </div>
        </div>
    </nav>