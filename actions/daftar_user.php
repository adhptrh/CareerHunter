<?php

session_start();

require "../conn.php";

if ($_POST["password"] != $_POST["cpassword"])
{
    header("Location: ../daftar?error=1");
    exit;
}

$user = new User($conn);

$data = $user->getAll();

while ($d = $data->fetch_assoc())
{
    if ($d["username"] == $_POST["username"])
    {
        header("Location: ../daftar?error=2");
        exit;
    }
}

$user->username = $_POST["username"];
$user->password = $_POST["password"];
$user->email = $_POST["email"];
$user->notelp = $_POST["notelp"];
$user->nama = $_POST["nama"];
$user->foto = "default.png";
$id = $user->register();


$_SESSION["id"] = $id;
$_SESSION["role"] = Role::$user;

header("Location: ../home");