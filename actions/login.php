<?php
session_start();
require "../conn.php";

$user = new User($conn);
$user->username = $_POST["username"];
$user->password = $_POST["password"];
$d = $user->login();
if ($d->num_rows > 0)
{
    $data = $d->fetch_assoc();
    $_SESSION["id"] = $data["id"];
    $_SESSION["role"] = Role::$user;
    header("Location: ../home");
    exit;
}

$user = new UserPerusahaan($conn);
$user->username = $_POST["username"];
$user->password = $_POST["password"];
$d = $user->login();
if ($d->num_rows > 0)
{
    $data = $d->fetch_assoc();
    $_SESSION["id"] = $data["id"];
    $_SESSION["role"] = Role::$user_perusahaan;
    header("Location: ../home");
    exit;
}

$user = new Admin($conn);
$user->username = $_POST["username"];
$user->password = $_POST["password"];
$d = $user->login();
if ($d->num_rows > 0)
{
    $data = $d->fetch_assoc();
    $_SESSION["id"] = $data["id"];
    $_SESSION["role"] = Role::$admin;
    header("Location: ../home");
    exit;
}

header("Location: ../masuk?error=1");