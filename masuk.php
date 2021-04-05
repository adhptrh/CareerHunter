<?php
$title = "Login";
$appname = "CareerHunter";

require "views/head.php";
?>

<div class="container mt-5 rounded px-5">
    <form>
        <h1 class="mb-3">Masuk</h1>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:150px;" id="basic-addon1">Email</span>
            <input required type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" style="width:150px;" id="basic-addon1">Password</span>
            <input required type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button class="btn btn-primary float-end">Daftar</button>
    </form>
</div>

<?php
require "views/foot.php";
?>