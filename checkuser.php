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
        if ($user["approved"] == "false")
        {
            header("Location: menunggu_approval");
            exit;
        }
        if ($user["approved"] == "ditolak")
        {
            header("Location: perusahaan_ditolak");
            exit;
        }
    }
    if ($_SESSION["role"] == Role::$admin) {
        $userr = new Admin($conn);
        $user = $userr->selectDataById($_SESSION["id"])->fetch_assoc();
    }
}