<?php
session_start();
require "conn.php";
$title = "CareerHunter";
$appname = "CareerHunter";

require "checkuser.php";
$user = null;

if (isset($_SESSION["id"])) {
    if ($_SESSION["role"] == Role::$user) {
        $userr = new User($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
    }
    if ($_SESSION["role"] == Role::$user_perusahaan) {
        $userr = new UserPerusahaan($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
        if ($user["approved"] == "false")
        {
            header("Location: menunggu_approval");
            exit;
        }
    }
    if ($_SESSION["role"] == Role::$admin) {
        $userr = new Admin($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
    }
}

require "views/head.php";
?>

<div class="pt-5 px-5 py-5 pr-5 bg-primary text-center shadow">
    <h1 class="fw-bold">Career<span class="text-white">Hunter</span></h1>
    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h5>
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