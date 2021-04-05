<?php
$title = "CareerHunter";
$appname = "CareerHunter";

require "views/head.php";
?>

<div class="pt-5 px-5 py-5 pr-5 bg-primary text-center shadow">
    <h1 class="fw-bold">Career<span class="text-white">Hunter</span></h1>
    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h3>
</div>

<div class="mt-5 bg-white text-center">
    <h1 class="fw-bold">Jelajahi lowongan pekerjaan</h1>
    <div class="container px-5">
        <div class="input-group input-group-lg mt-4 shadow rounded-pill">
            <input type="text" class="form-control text-center rounded-pill border-0" placeholder="Cari posisi pekerjaan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
        </div>
    </div>
</div>

<?php
require "views/foot.php";
?>