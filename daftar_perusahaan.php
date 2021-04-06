<?php
session_start();
$title = "Register";
$appname = "CareerHunter";
require "views/head.php";
?>

<div class="container mt-5 rounded px-5">
    <form method="post" action="actions/daftar_perusahaan" enctype="multipart/form-data">
        <h1 class="mb-3">Daftar</h1>
        <a href="daftar">Daftar sebagai User disini</a>
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Nama Perusahaan</span>
            <input name="nama" required type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Email Perusahaan</span>
            <input name="email" required type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Nomor Perusahaan</span>
            <input name="nomor" required type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Nama Penanggung Jawab</span>
            <input name="nama_penanggung_jawab" required type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Nomor HP Penanggung Jawab</span>
            <input name="nomor_penanggung_jawab" required type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Username</span>
            <input name="username" required type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Password</span>
            <input name="password" required type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:250px;" id="basic-addon1">Konfirmasi Password</span>
            <input name="cpassword" required type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Akta Pendirian Usaha</label>
            <input required class="form-control" name="foto" type="file" id="formFile">
        </div>

        <button class="btn btn-primary float-end">Daftar</button>
    </form>
</div>

<?php
require "views/foot.php";
?>