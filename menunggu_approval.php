<?php
session_start();
require "conn.php";
$title = "CareerHunter";
$appname = "CareerHunter";

require "checkuser.php";

require "views/head.php";
?>

<div class="pt-5 px-5 py-5 pr-5 bg-primary text-center shadow">
    <h1 class="fw-bold">Career<span class="text-white">Hunter</span></h1>
    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h5>
</div>

<div class="mt-5 bg-white text-center">
    <h1 class="fw-bold">Silahkan tunggu sampai approval dari admin.</h1>
</div>

<?php
require "views/foot.php";
?>