<?php
require "conn.php";
session_start();
$title = "Register";
$appname = "CareerHunter";
require "views/head.php";
?>

<div class="container mt-5 rounded px-5">
    <form method="post" action="actions/daftar_user">
        <h1 class="mb-3">Daftar</h1>
        <a href="daftar_perusahaan">Daftar sebagai User Perusahaan disini</a>
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text" style="width:180px;" id="basic-addon1">Username</span>
            <input name="username" required type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3 mt-3">
            <span class="input-group-text" style="width:180px;" id="basic-addon1">Nama Lengkap</span>
            <input name="nama" required type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:180px;" id="basic-addon1">Email</span>
            <input name="email" required type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:180px;" id="basic-addon1">Nomor Telpon</span>
            <input name="notelp" required type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:180px;" id="basic-addon1">Password</span>
            <input name="password" required type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:180px;" id="basic-addon1">Konfirmasi Password</span>
            <input name="cpassword" required type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button class="btn btn-primary float-end">Daftar</button>
    </form>
</div>

<?php
require "views/foot.php";
?>